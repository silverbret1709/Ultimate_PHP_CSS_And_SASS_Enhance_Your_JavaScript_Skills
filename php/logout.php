<?php
require '../models/User.php';
require '../lib/Database.php';
require '../config/config.php';
require '../helpers/url_redirect.php';

session_start();

function logout() {
    unset($_SESSION['user_id']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_name']);

    session_destroy();
    header('Location:../index.php');
//    redirect('index.php');
}

logout();