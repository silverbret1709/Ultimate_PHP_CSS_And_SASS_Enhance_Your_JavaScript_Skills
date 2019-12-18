<?php include 'inc/head.php';?>
<section class="section-login" id="section-login">
    <div class="login">
        <div class="login__form">
            <form action="" method="POST">
                <?php msg('register_success'); ?>
                <div class="login__form-heading">
                    Login
                </div>
                <div class="login__form-logo">
                    <i class="fas fa-sign-in-alt"></i>
                </div>
                <div class="login__form__group">
                    <input type="email" class="login__form__input" placeholder="Email" id="login-email" name="login-email" required>
                    <label for="email" class="login__form__label"><i class="fas fa-paper-plane"></i>Email Address</label>
                    <div class="login-email-msg login__form__label" style="font-size: 1.5rem; padding-left: 1.8rem;"></div>
                </div>

                <div class="login__form__group">
                    <input type="password" class="login__form__input" placeholder="Password" id="login-password" name="login-password" required>
                    <label for="password" class="login__form__label"><i class="fas fa-unlock-alt"></i>Password</label>
                    <div class="login-password-msg login__form__label" style="font-size: 1.5rem; padding-left: 1.8rem;"></div>
                </div>
                <div class="progress d-none">
                    <div class="progress-bar progress-bar-striped progress-bar-animated " id="my-pbar" role="progressbar" aria-valuenow="75"
                         aria-valuemin="0" aria-valuemax="100" style="width: 0%;">

                    </div>
                </div>
                <div class="login__form_group progress-bar">

                </div>

                <div>
                    <button type="button" class="btn btn-login" id="submit-registration">Login &rAarr;</button>
                </div>
                <p class="already-member">No Account? Register here <a href="registration.php" class="to-login">Register</a></p>

            </form>
        </div>
    </div>
</section>
<?php include 'inc/scripts.php';?>
