<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signUp.css">
</head>
<body>



<header>
        <div class="logo">
            <span>EventHub</span>
        </div>
        <div class="nav" align="left">


            <ul>
                <li><a href="/P-try/index.php">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="signIn.php">Sign In</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
<br><br>
<hr>
        </div>

</header> 






<div class="main" align="center">

    <div class="left" ><br><br><br><br><br>
    <h2 class="Create">Creating a New Account</h2>
    <hr>
    <p class="already">Already have an account? <a href="signIn.php" target="_blank">SignIn</a></p>

    <br><br>

    
    <form method="POST" action="../controller/signUpCheck.php" onsubmit="return validateForm()">
        <div>
            <label for="firstName">First Name: </label>
            <input id="firstName" name="firstName" placeholder="Enter Your First Name" type="text" required>
            <span id="firstNameError" class="error"></span>
        </div>

        <br>

        <div>
            <label for="lastName">Last Name: </label>
            <input id="lastName" name="lastName" placeholder="Enter Your Last Name" type="text" required>
            <span id="lastNameError" class="error"></span>
        </div>

        <br>

        <div>
            <label for="email">Email: </label>
            <input id="email" name="email" placeholder="xyz@mail.com" type="email" required>
            <span id="emailError" class="error"></span>
        </div>

        <br>

        <div>
            <label for="userName">Username: </label>
            <input type="text" id="userName" name="userName" placeholder="Please Enter your username" required>
            <span id="userNameError" class="error"></span>
        </div>

        <br>

        <div>
            <label for="DOB">Birthday: </label>
            <input id="DOB" name="DOB" type="date">
            <span id="DOBError" class="error"></span>
        </div>

        <br>

        <div>
            <label for="gender">Gender</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>

            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>

            <input type="radio" name="gender" id="other" value="other">
            <label for="other">Other</label>
            <span id="genderError" class="error"></span>
        </div>

        <br>

        <div>
            <label for="mobile">Cellphone: </label>
            <input type="tel" id="mobile" name="mobile" placeholder="Please Enter Your Cellphone Number">
        </div>

        <br>

        <div>
            <label for="address">Address: </label>
            <textarea id="address" name="address" placeholder="Please Enter your address" rows="3"></textarea>
        </div>

        <br>

        <div>
            <label for="password">Password</label>
            <input id="password" name="password" placeholder="Please Enter your Password" type="password" required>
            <span id="passwordError" class="error"></span>
        </div>

        <br>

        <div>
            <label for="confirmPassword">Re Enter Password: </label>
            <input id="confirmPassword" name="confirmPassword" placeholder="Password again" type="password" required>
            <span id="confirmPasswordError" class="error"></span>
        </div>

        <br>

        <div >
            <input type="submit" value="Sign Up" name="signUp">
        </div>

        <br>

        <label for="terms">
            <input type="checkbox" id="terms" name="terms" required>
            <span>agree with the <a href="TeamsOfService.php" target="_blank">Terms & Conditions</a></span>
        </label>
    </form>
    </div>
    

<br><br><br><br>
<footer>
        <a href="Terms&Conditions.php">Terms & Conditions</a> 
        <a href="help.php">Help</a> 
        <a href="contact.php">Contact</a> 
        <a href="about.php">About</a>
        
        <p>© 2024 EventHub — The Event Management System made with passion by (Our Group)</p>
            
    </footer>



<script src="../assets/js/signUp.js"></script>


</body>
</html>