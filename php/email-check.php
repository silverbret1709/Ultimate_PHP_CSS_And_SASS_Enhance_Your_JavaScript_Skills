<?php
require_once '../config/config.php';
require_once '../lib/Database.php';
require_once '../models/Post.php';
require_once '../helpers/session_helper.php';
require_once '../models/User.php';

$user = new User();


$user_email = filter_var($_POST['email_check'], FILTER_SANITIZE_EMAIL);

$result = $user->check_email($user_email);

if ($result) {
    echo json_encode(['response' => 'email_success', 'message' => $result->user_email]);
} else {
    echo json_encode(['response' => 'email_fail', 'message' => 'No Record for this email']);
}

