<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header with Buttons and Footer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
        <button onclick="window.location.href='headerprac.php'">Home</button>
        <button onclick="window.location.href='logins.php'">Login</button>
        <button onclick="window.location.href='signup.php'">Sign Up</button>
    </div>
</header>

<!-- Your main content goes here -->
<div style="height: 1000px; background-color: #f9f9f9; padding: 20px;">
    <p></p>
</div>

<footer>
    <p>&copy; 2024 My Website</p>
</footer>

</body>
</html>
