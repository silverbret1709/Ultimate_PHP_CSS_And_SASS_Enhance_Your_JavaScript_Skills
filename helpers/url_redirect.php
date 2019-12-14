<?php

// page redirect
function redirect($page) {
    header("Location:") . ROOT_PATH . $page;
    exit();
}