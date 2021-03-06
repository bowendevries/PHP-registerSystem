<?php

session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is register and login app built with php, MYSQLi and Bootstrap">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light grey lighten-3">
            <a class="navbar-brand" href="#"><img src="img/origami.png" height="50"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mr-auto">
                    <a class="nav-item nav-link" href="#">Home</a>
                    <a class="nav-item nav-link" href="#">Features</a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                    <a class="nav-item nav-link" href="#">About</a>
                    <a class="nav-item nav-link" href="#">Contact</a>
                </div>
            </div>

            <?php

            if(isset($_SESSION['userId'])) {
               echo '<form action="includes/logout.php" method="post">
                      <button type="submit" name="logout-submit" class="btn btn-info btn-sm">Logout</button>
                    </form>';
            } else {
               echo '<form action="includes/login.php" method="post">
                      <div class="row">
                        <div class="col-auto">
                          <div class="md-form mt-0">
                            <input type="email" name ="userEmail" class="form-control" placeholder="Enter your email">
                          </div>
                        </div>
                        <div class="col-auto">
                          <div class="md-form mt-0">
                            <input type="password" name="userPwd" class="form-control" placeholder="Enter your password">
                          </div>
                        </div>
                        <div class="col-auto">
                          <button type="submit" name="login-submit" class="btn btn-info btn-sm">Login</button>
                        </div>
                      </div>
                    </form>
                    <a href="signup.php">Sign up</a>';
                    }
            ?> 
        </nav>
    </header>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
  </body>
</html>