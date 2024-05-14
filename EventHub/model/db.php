<?php

$host = "localhost";
$dbUser = "root";
$dbName = "webtech";
$dbPassword = "";

function dbConnect(){
    global $host;
    global $dbUser;
    global $dbPassword;
    global $dbName;
    
    $con = mysqli_connect($host,$dbUser,$dbPassword,$dbName);
    
    return $con;
}








?>