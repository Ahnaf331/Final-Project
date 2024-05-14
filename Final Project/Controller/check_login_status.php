<?php

function check_login_status() {
    session_start();
    if (isset($_SESSION['user_login'])) {
        return true; 
    } elseif (isset($_COOKIE['remember_user'])) {
        $_SESSION['user_login'] = $_COOKIE['remember_user'];
        return true; 
    } else {
        header("Location: ../View/logins.php");
        exit; 
   
    }
}

