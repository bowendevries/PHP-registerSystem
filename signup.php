<?php
require "header.php";
?>

    <main>
       <section>
            <h1>Sign Up</h1>
            <form action="includes/signup.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                <button type="submit" name="signup-submit">Sign up</button>
            </form>}
       </section>
    </main>

<?php
require "footer.php";
?>