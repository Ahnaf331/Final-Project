<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email from the form
    $email = $_POST["email"];

    // Generate a random code 
    $code = mt_rand(100000, 999999);

    //Store the code in a session variable for verification later
    session_start();
    $_SESSION["reset_code"] = $code;
    $_SESSION["reset_email"] = $email;

    //Send the code to the user (insted of send this via email display the code in page)
    
    echo "A verification code has been sent to your email address: $code<br><br>";

    //Then provide a link to the next step verification
    echo '<a href="verifyCode.php">Verify Code</a>';
}
?>
