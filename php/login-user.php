<?php

require_once '../config/config.php';
require_once '../lib/Database.php';
require_once '../helpers/session_helper.php';
require_once '../models/User.php';

function login() {
    $user = new User();
    $user_email = filter_var($_POST['login-email'], FILTER_SANITIZE_EMAIL);
    $form_password = $_POST['login-password'];

    $exists = $user->findUserByEmail($user_email);
    if ($exists) {
        $db_role = $exists->user_role;
        $db_password  = $exists->user_password;

        if ($db_role === 'admin') {
            if (password_verify($form_password, $db_password)) {
                $login = $user->userLogin($user_email, $db_password);
                if ($login) {
                    $loggedInUser = createUserSession($login);
                    echo json_encode(['msgcode' => 'success', 'msg' => 'admin/index.html']);
                } else {
                    echo json_encode(['msgcode' => 'no_password', 'msg' => 'Please Enter Correct Password Admin' ]);
                }
            } else {
                echo json_encode(['msgcode' => 'no_password', 'msg' => 'Please Enter Correct Password Admin']);
            }
        } else  {
            if (password_verify($form_password, $db_password)) {
                $login = $user->userLogin($user_email, $db_password);
                if ($login) {
                    $loggedInUser = createUserSession($login);
                    echo json_encode(['msgcode' => 'success', 'msg' => 'profile/index.php']);
                } else {
                    echo json_encode(['msgcode' => 'no_password', 'msg' => 'Please Enter Correct Password' ]);
                }
            } else {
                echo json_encode(['msgcode' => 'no_password', 'msg' => 'Please Enter Correct Password']);
            }
        }

    } else {
        echo json_encode(['msgcode' => 'no_email', 'msg' => 'Please enter Correct Email Address']);
    }
}

login();

function createUserSession($login) {
    $_SESSION['user_id'] = $login->user_id;
    $_SESSION['user_email'] = $login->user_email;
    $_SESSION['user_name'] = $login->user_name;
}