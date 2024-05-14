<?php
include_once('../controller/functions.php');
require_once('../model/usersModel.php');

if(isset($_REQUEST['submit'])){

   $error_message = '';
   $success_message = '';
   $user_name = $_REQUEST['user_name'];
   $date = $_REQUEST['date'];
   $Schedule = $_REQUEST['Schedule'];
   $duration = $_REQUEST['duration'];
   $p_type = $_REQUEST['p_type'];
   $n_people =$_REQUEST['n_people'];

   

   $submited_data = [
    'user_name' => $user_name,
    'date' => $date,
    'Schedule' => $Schedule,
    'duration' => $duration,
    'p_type' => $p_type,
    'n_people' => $n_people,
    
    ];

    if($error_message === ''){

        $result = book_resort($submited_data);
        
        if ($submited_data == true){
            session_start();
            $_SESSION["book_resort"] = $username;

            if (isset($_POST["submit"])) {
                $cookie_name = "submit";
                $cookie_value = $username;
                $cookie_expire = time() + 3600;
                setcookie($cookie_name, $cookie_value, $cookie_expire, "/");
            }
            header('location:  payment.php');

        }else{
                $invalid_data = "Invalid  details! Try Again!";
            } 
    }

   
}
   
?>
<!DOCTYPE html>
<html>
<head>
    <title>Event Booking</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Website Header</h1>
        <div class="buttons-container">
            
            <button onclick="window.location.href='signup.php'">Log Out</button>
        </div>
    </header>

    <div class="Book-container">
        <h2>Book Resort</h2>
        <form action="#" method="POST">
            
            <label for="user_name">User Name: </label>
            <input type="text" id="user_name" name="user_name" placeholder="Enter User Name" required><br><br>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required><br><br>
            <label for="schedule">Schedule:</label>
            <input type="text" id="schedule" name="schedule" placeholder="Enter Schedule" required><br><br>
            <label for="duration">Duration:</label>
            <input type="number" id="duration" name="duration" min="1" placeholder="Enter duration in days" required><br><br>
            <label for="placeType">Place Type:</label>
            <select id="placeType" name="p_type">
                <option value="">-- Select Place Type (optional) --</option>
                <option value="beach">Beach</option>
                <option value="mountain">Mountain</option>
                <option value="city">City</option>
            </select><br><br>
            <label for="numberOfPeople">Number of People:</label>
            <input type="number" id="numberOfPeople" name="n_people" min="50" placeholder="Enter number of people" required><br><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

    <footer>
        <p>&copy; 2024 My Website</p>
    </footer>
</body>
</html>
