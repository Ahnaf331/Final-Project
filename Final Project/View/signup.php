<?php
include_once('../Model/functions.php');
require_once('../Model/usersModel.php');

if(isset($_REQUEST['submit'])){

   $error_message = '';
   $success_message = '';
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

   if($full_name == ''){
       $error_message .= "Your must fill Full Name! <br>";
   }elseif (name_validation($full_name) === false) {
       $error_message .= "Invalid Name Format! <br>";
   }
   if($email == ''){
       $error_message .= "Your must fill Email! <br>";
   }elseif (email_validation($email) === false) {
       $error_message .= "Invalid Email Format! <br>";
   }
   if($username == ''){
       $error_message .= "Your must fill User Name! <br>";
   }elseif (username_validation($username) === false) {
       $error_message .= "Invalid User Name Format! <br>";
   }elseif (user_name_exists($username) == true) {
    $error_message .= "This User Name Already Exists. Try Another! <br>";
   }
   if($password == ''){
       $error_message .= "Your must fill Password! <br>";
   }elseif (password_validation($password) === false) {
       $error_message .= "Wrong Password Format! <br>";
   }elseif ($c_password !== $password) {
       $error_message .= "Password Doesn't Match! <br>";
   }
   if($gender == ''){
       $error_message .= "Your must fill Gender! <br>";
   }
   if ($date_of_birth == '') {
       $error_message .= "You must fill Date of Birth! <br>";
   }


   
   $submited_data = [
    'user_name' => $username,
    'full_name' => $full_name,
    'email' => $email,
    'gender' => $gender,
    'date_of_birth' => $date_of_birth,
    'password' => $password,
    'user_type' => 'Customer'
    ];

   if($error_message === ''){

    $result = create_user($submited_data);
    if($result){
        $error_message .= "Sign Up Success! <a href='logins.php'>Login Now</a> <br>";
    }
    
   }



   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>

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
    
    .signup-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        width: 400px;
        margin: 50px auto;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    
    .signup-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    
    .signup-container input[type="text"],
    .signup-container input[type="email"],
    .signup-container input[type="password"],
    .signup-container input[type="c_password"],
    .signup-container select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    
    .signup-container select {
        height: 40px;
    }
    
    .signup-container input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }
    
    .signup-container input[type="submit"]:hover {
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
<div class="signup-container">
    <h2>Sign Up</h2>
    <form action="#" method="POST" id="registration_form" enctype="multipart/form-data" >
        <input type="text" placeholder="Username" id="username"><br><br>
        <input type="text" placeholder="Full Name" id="full_name"><br><br>
        <input type="email" placeholder="Email" id="email"><br><br>
        <input type="date" placeholder="Date of Birth" id="date_of_birth"><br><br>
        <div class="checkbox-container">
                        <fieldset>
                        <legend>Gender</legend>
                            <input type="radio" name="gender" value="male" id="male"><label for=""> Male</label>
                            <input type="radio" name="gender" value="female" id="female"><label for=""> Female</label>
                            
                        </fieldset><br><br>
                    </div>

        
        <input type="password" placeholder="Password" id="password"><br><br>
        <input type="c_password" placeholder="Confirm Password" id="c_password"><br><br>
        <input type="submit" value="Sign Up" onsubmit="SignUp()">
    </form>
</div>
</div>
            <div id="status_messages">
                
            </div>
            
<footer>
    <p>&copy; 2024 My Website</p>
</footer>

</body>
</html>
