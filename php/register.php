<?php
function registration() {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $user_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $user_password = $_POST['password'];

    $data = [
        'user_name' => $username,
        'user_email' => $user_email,
        'user_password' => $user_password
    ];

    print_r($data);
}

registration();