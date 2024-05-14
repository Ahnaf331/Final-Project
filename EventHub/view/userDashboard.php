<?php 
    require_once('../model/userModel.php');
    session_start();

    if(!isset($_COOKIE['flag'])){
        header('location: signIn.php');
    }
    $userName = $_SESSION['username'];
    $userData = getUserData($userName);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="userDashboard.css">
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




<div class="main">

    <div class="top">
        
        <h1>Welcome <?= $userData['firstName'] . ' ' . $userData['lastName'] ?></h1>
        <p>logged in as <b><?= $userData['email'] ?></b></p>


    </div>


    <div class="bar">

        <a href="viewProfile.php" >View Profile</a>

        <a href="about.php" >About</a>

        <a href="contact.php">Contact</a>


    </div>


    
</div>


<div class="sidebar">
<a href="viewProfile.php" >View Profile</a>

<br>

<a href="event.php">Explore Event</a>

<br>

<br>

<a href="about.php" >About</a>

<br>

<a href="contact.php">Contact</a>


<br>
</div>

        

      
  
    <form method="post" action="../controller/signOut.php" >
    <button type="submit">Sign Out</button>
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
