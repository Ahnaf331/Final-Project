<?php

include_once('../Model/functions.php');
 require_once('../Model/usersModel.php');
 require_once('../Controller/check_login_status.php');




 if(isset($_REQUEST['submit'])){

    $error_message = '';
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == ''){
        $error_message .= "Your must fill User Name! <br>";

    }
    if($password == ''){
        $error_message .= "Your must fill Password! <br>";
    }
    if($error_message === ''){

        $login = user_login($username, $password);
        if ($login == true){
            session_start();
            $_SESSION["user_login"] = $username;

            if (isset($_POST["remember_me"])) {
                $cookie_name = "remember_user";
                $cookie_value = $username;
                $cookie_expire = time() + 3600;
                setcookie($cookie_name, $cookie_value, $cookie_expire, "/");
            }
            header('location: Event Package.php');

        }else{
                $invalid_login = "Invalid login details! Try Again!";
            } 
    }



    

    
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    
    header {
        background-color: #153448;
        color: #fff;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    button {
            padding: 10px 20px;
            margin-left: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    .login-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        align-items: center;
        position: absolute;
        top: 50%;
        right: 50%;
        transform: translate(50%, -50%);
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    
    .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    
    .login-container input[type="text"],
    .login-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    
    .login-container input[type="submit"],
    .login-container input[type="button"] {
        margin-left: 10px;
        padding: 8px 12px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    .login-container input[type="submit"]:hover,
    .login-container input[type="button"]:hover {
        background-color: #0056b3;
    }
    
    
    
    footer {
        background-color: #153448;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>
</head>
<body>
    <header>
        <h1>EventHub</h1>
        <div class="buttons-container">
        <button onclick="window.location.href='First.php'">Home</button>
        <button onclick="window.location.href='logins.php'">Login</button>
        <button onclick="window.location.href='signup.php'">Sign Up</button>
    </div>
    </header>
    <?php 
    if(isset($_SESSION['success_message'])){
        echo $_SESSION['success_message']."<br><br>";
    }
    ?>
<div class="login-container">
    <h2>Login</h2>
    <form action="#" method="POST" id="login_form">
        <input type="text" placeholder="Username" id="">
        <input type="password" placeholder="Password">
        <br>
        <input type="checkbox" name="remember_me" id=""><label for="">Remember Me </label>
        <br>
        <br>
        <input type="submit" value="Submit">
        
        <br>
        <p><?php if(isset($error_message)){echo $error_message;} ?></p>
        <p><?php if(isset($invalid_login)){echo $invalid_login;} ?></p>
    </form>
</div>
<div 
id="status_messages">
                
            </div>

<footer>
    <p>&copy; 2024 My Website</p>
</footer>

</body>
</html>
