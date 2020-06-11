<?php
require "header.php";
?>

<main>
    <section class="md-container d-flex align-items-center justify-content-center">
        <!-- Material form register -->
        <div class="card">
            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Sign up</strong>
            </h5>
            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">
                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="includes/signup.inc.php" method="post">
                    <div class="form-row">
                        <div class="col">
                            <!--Username-->
                            <div class="md-form">
                                <input type="text" id="username" name="username" class="form-control">
                                <label for="username">Username</label>
                            </div>
                        </div>
                    </div>
                    <!-- E-mail -->
                    <div class="md-form mt-0">
                        <input type="email" id="email" name="email" class="form-control">
                        <label for="email">E-mail</label>
                    </div>
                    <!-- Password -->
                    <div class="md-form">
                        <input type="password" id="pwd" name="pwd" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                        <label for="pwd">Password</label>
                    </div>
                    <!-- Password Repeat -->
                    <div class="md-form">
                        <input type="password" id="pwd-repeat" name="pwd-repeat" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                        <label for="pwd-repeat">Repeat Password</label>
                    </div>
                    <!-- Newsletter -->
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                        <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
                    </div>
                    <!-- Sign up button -->
                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="signup-submit">Sign Up</button>
                    <!-- Social register -->
                    <p>or sign up with:</p>
                    <a type="button" class="btn-floating btn-fb btn-sm">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a type="button" class="btn-floating btn-tw btn-sm">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a type="button" class="btn-floating btn-li btn-sm">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a type="button" class="btn-floating btn-git btn-sm">
                        <i class="fab fa-github"></i>
                    </a>
                    <hr>
                    <!-- Terms of service -->
                    <p>By clicking <em>Sign up</em> you agree to our <a href="" target="_blank">terms of service</a>
                </form>
                <!-- Form -->
            </div>
        </div>
    </section>
</main>

<?php
require "footer.php";
?>