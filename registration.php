<?php include 'inc/head.php'?>
<section class="section-register" id="section-register">
    <div class="register">
        <div class="register__form">
            <form action="php/register.php" method="POST">
                <?php msgDanger('register_fail'); ?>
                <div class="register__form-heading">
                    Register
                </div>
                <div class="register__form-logo">
                    <i class="fas fa-sign-in-alt"></i>
                </div>
                <div class="register__form__group">
                    <input type="text" class="register__form__input" placeholder="Username" id="username" name="username" required autocomplete="off">
                    <label for="username" class="register__form__label"><i class="far fa-user"></i>Choose Username</label>
                    <div class="username-error"></div>
                </div>
                <div class="register__form__group">
                    <input type="email" class="register__form__input email" placeholder="Email" id="email" name="email" required>
                    <label for="email" class="register__form__label email_label"><i class="fas fa-paper-plane"></i>Email Address</label>
                    <div class="email-error register__form__label"></div>
                </div>

                <div class="register__form__group">
                    <input type="password" class="register__form__input" placeholder="Password" id="password" name="password" required>
                    <label for="password" class="register__form__label password_label"><i class="fas fa-unlock-alt"></i>Password</label>
                    <div class="password-error register__form__label" style="font-size: 1.3rem;"></div>
                </div>

                <div class="register__form__group">
                    <input type="password" class="register__form__input" placeholder="Password" id="confirm-password" name="confirm-password" required>
                    <label for="confirm-password" class="register__form__label confirm_password_label"><i class="fas fa-unlock-alt"></i>Confirm Password</label>
                    <div class="confirm-password-error register__form__label"></div>
                </div>

                <div class="register__form_group progress-bar">

                </div>

                <div>
                    <button type="submit" class="btn btn-register" id="submit-registration">Create Account &rAarr;</button>
                </div>
                <p class="already-member">Already a Member? <a href="login.php" class="to-login">Log In</a></p>
            </form>
        </div>
    </div>
</section>

<?php include 'inc/scripts.php';?>