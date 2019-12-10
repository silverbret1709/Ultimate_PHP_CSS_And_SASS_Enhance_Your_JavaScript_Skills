<?php require_once 'bootstrap.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Nunito+Sans:300,400,700|Open+Sans|Roboto:100,300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="vendors/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="section-register" id="section-register">
    <div class="register">
        <div class="register__form">
            <form action="php/register.php" method="POST">
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
                    <input type="email" class="register__form__input" placeholder="Email" id="email" name="email" required>
                    <label for="email" class="register__form__label"><i class="fas fa-paper-plane"></i>Email Address</label>
                    <div class="email-error"></div>
                </div>

                <div class="register__form__group">
                    <input type="password" class="register__form__input" placeholder="Password" id="password" name="password" required>
                    <label for="password" class="register__form__label"><i class="fas fa-unlock-alt"></i>Password</label>
                    <div class="password-error"></div>
                </div>

                <div class="register__form__group">
                    <input type="password" class="register__form__input" placeholder="Password" id="confirm-password" name="confirm-password" required>
                    <label for="confirm-password" class="register__form__label"><i class="fas fa-unlock-alt"></i>Confirm Password</label>
                    <div class="confirm-password-error"></div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="vendors/js/bootstrap.min.js"></script>
<script src="js/menuClick.js"></script>
</body>
</html>