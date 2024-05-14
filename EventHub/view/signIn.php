<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="signIn.css">
    <!-- <style>
body {
  background-image: url('bg.jpeg');
}
</style> -->
</head>
<body>


<header>
        <div class="logo">
            <span>EventHub</span>
        </div>
        <div class="nav" align="left">


            <ul>
                <li><a href="/P-try/index.php" >Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="signIn.php" style="color: blue;">Sign In</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

<hr>
        </div>

</header> 

<br><br> <br><br><br><br><br><br><br>
<div class="main" align="center" >

    <div class="left" align="left">

        <form method="POST" action="../controller/signInCheck.php" onsubmit="return validateForm()">

            
            <fieldset>
            <legend><h1 style="color: black;">Sign In </h1></legend>
            <input type="text" id="userNameOrEmail" name="userNameOrEmail" placeholder="Enter your Email/Username">
            <span id="userNameOrEmailError" class="error"></span>

            <br><br>

            <input type="password" id="password" name="password" placeholder="Type your Password">
            <span id="passwordError" class="error"></span>

            <br><br>

            <input type="submit" value="Sign In" name="signIn">
            </fieldset>
            

        </form>

        <br><br><br><br>

            
        <div align="center">
            <p>New in EventHub.?</p>
            <a href="signUp.php" class="create" style="color: blue;">Create An Account</a> <br> <br>
            <a href="resetPassword.php" style="color: orange;">Can’t access your account?</a>
        </div>

    </div>
    </div>

</div>

<br><br><br><br><br><br><br><br>

<footer>
        <a href="Terms&Conditions.php">Terms & Conditions</a> 
        <a href="elp.php">Help</a> 
        <a href="contact.php">Contact</a> 
        <a href="about.php">About</a>
        
        <p>© 2024 EventHub — The Event Management System made with passion by (Our Group)</p>
            
    </footer>






<script src="../assets/js/signIn.js"></script>

</body>
</html>