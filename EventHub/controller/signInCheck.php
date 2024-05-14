<?php 
    require_once('../model/userModel.php');
    session_start();
    
    $userNameOrEmail = $_REQUEST['userNameOrEmail'];
    $password = $_REQUEST['password'];

    if ($userNameOrEmail == "") {
        echo "Username or Email Needed";
    } elseif($password == ""){
        echo "Password needed ";
    }
    
    else {
        $status = signIn($userNameOrEmail, $password);
        
        if ($status) {
            $_SESSION['username'] = $userNameOrEmail;
            setcookie('flag', 'true', time() + 3600, '/');

            header('location: ../view/userDashboard.php');
        } else {
           echo "<script> alert('Wrong Usrname or Password, try again'); </script>";
           header('location: ../view/wrongSignIn.php');
        }
    }
?>
