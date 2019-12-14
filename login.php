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
                    <input type="email" class="login__form__input" placeholder="Email" id="email" name="email" required>
                    <label for="email" class="login__form__label"><i class="fas fa-paper-plane"></i>Email Address</label>
                    <div class="login-email-msg login__form__label" style="font-size: 1.5rem; padding-left: 1.8rem;"></div>
                </div>

                <div class="login__form__group">
                    <input type="password" class="login__form__input" placeholder="Password" id="password" name="password" required>
                    <label for="password" class="login__form__label"><i class="fas fa-unlock-alt"></i>Password</label>
                    <div class="login-password-msg login__form__label" style="font-size: 1.5rem; padding-left: 1.8rem;"></div>
                </div>

                <div class="login__form_group progress-bar">

                </div>

                <div>
                    <button type="submit" class="btn btn-login" id="submit-registration">Login &rAarr;</button>
                </div>
                <p class="already-member">No Account? Register here <a href="registration.php" class="to-login">Register</a></p>

            </form>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="vendors/js/bootstrap.min.js"></script>
<script src="js/menuClick.js"></script>
</body>
</html>
