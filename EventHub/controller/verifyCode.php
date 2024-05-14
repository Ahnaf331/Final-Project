<?php
// Start the session to access session variables
session_start();

// Check if session variables are set
if (!isset($_SESSION["reset_code"]) || !isset($_SESSION["reset_email"])) {
    // Redirect back to forgot_password.html if session variables are not set
    header("Location: forgotPass.html");
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the code and new password from the form
    $code = $_POST["code"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    // Check if code matches the one sent to the user
    if ($code == $_SESSION["reset_code"]) {
        if ($new_password == $confirm_password) {
            echo "Password reset successful!";
        } else {
            echo "Passwords do not match!";
        }
    } else {
        // Code does not match
        echo "Invalid verification code!";
    }

    // Unset session variables
    unset($_SESSION["reset_code"]);
    unset($_SESSION["reset_email"]);
} else {
    // Display the verification code form
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Verify Code</title>
    </head>
    <body>
        
<header>
        <div class="logo">
            <span>EventHub</span>
        </div>
        <div class="nav" align="left">


            <ul>
                <li><a href="index.php" style="color: blue;">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="view/about.php">About</a></li>
                <li><a href="view/signIn.php">Sign In</a></li>
                <li><a href="view/contact.php">Contact</a></li>
            </ul>
<br><br>
<hr>
        </div>

</header> 
        <h2>Verify Code</h2>
        <form method="POST" action="">
            <label for="code">Enter verification code:</label><br>
            <input type="text" id="code" name="code" required><br><br>
            <label for="new_password">New Password:</label><br>
            <input type="password" id="new_password" name="new_password" required><br><br>
            <label for="confirm_password">Confirm Password:</label><br>
            <input type="password" id="confirm_password" name="confirm_password" required><br><br>
            <input type="submit" value="Reset Password">
        </form>

        <footer>
        <a href="view/Terms&Conditions.php">Terms & Conditions</a> 
        <a href="view/help.php">Help</a> 
        <a href="view/contact.php">Contact</a> 
        <a href="view/about.php">About</a>
        
        <p>© 2024 EventHub — The Event Management System made with passion by (Our Group)</p>
            
    </footer>

    </body>
    </html>
    <?php
}
?>
