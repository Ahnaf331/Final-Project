<?php
    session_start();
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $full_name = $_REQUEST['full_name'];
    $password = $_REQUEST['password'];
    $c_password = $_REQUEST['c_password'];
    if(isset($_REQUEST['gender'])){
        $gender = $_REQUEST['gender'];
    }else{
        $gender = '';
    }
    $date_of_birth = $_REQUEST['date_of_birth'];
 

    require_once('../Model/usersModel.php');
    $result = register($username,$email, $full_name,$password, $gender,$date_of_birth);
    echo $result;
?>