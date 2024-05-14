<?php

require_once('../Controller/check_login_status.php');
if(!check_login_status()){
    header('location: logins.php');
}


?>

<!DOCTYPE html>
<html >
<head>
    <title>Event Package</title>
</head>
<body>
<header>
    <h1>EventHub</h1>
    <div class="buttons-container">
        
    </div>
<div>
<Form action="#" method="POSt" enctype="">
            <fieldset style="width: 150px; height: 200px;">
                <Legend>Hotels</Legend>
                <img src="Hotel.jpg"  height="100px" width="100px"><br>
                <text>full details of the package</text><br>
                <a href="venueHotel.php">Venue</a><br>
                <a href="Book_Hotel.php">Book Now</a>

            </fieldset>
            <Form action="" method="post" enctype="">
                <fieldset style="width: 150px; height: 200px;">
                    <Legend>Resorts</Legend>
                    <img src="Resorts.jpg"  height="100px" width="100px"><br>
                    <text>full details of the package</text><br>
                    <a href="venueResorts.php">Venue</a><br>
                    <a href="Book_Resort.php">Book Now</a>
                
                </fieldset>
                </Form>
                <a href="location: ../Controller/logout.php">Logout</a>
               
</div>
        
 
 <footer>
    <p>&copy; 2024 My Website</p>
</footer>
</body>
</html>