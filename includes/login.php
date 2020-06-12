<?php

if(isset($_POST['login-submit'])) {

    require 'dbh.php';

    $email = $_POST['userEmail'];
    $password = $_POST['userPwd'];

    if(empty($email) || empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username=? OR email=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=emptyfields");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $email, $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
               $pwdCheck = password_verify($password, $row['userpwd']);
               if($pwdCheck == false) {
                header("Location: ../index.php?error=wrongpwd");
                exit();
               } elseif($pwdCheck == true) {
                   session_start();
                   $_SESSION['userId'] = $row['id'];
                   $_SESSION['username'] = $row['username'];

                   header("Location: ../index.php?login=succes");
                   exit();
               } else {
                header("Location: ../index.php?error=wrongpwd");
                exit();
               }
            } else {
                header("Location: ../index.php?error=nouser");
                exit();
            }
        }
    }

} else {
    header("Location: ../index.php");
    exit();
}
