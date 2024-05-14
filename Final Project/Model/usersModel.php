<?php
require_once('db.php');

function user_login($username, $password){
    $conneciton = get_connection();
    $sql = "SELECT * FROM users WHERE user_name = '{$username}' AND password = '{$password}'";
    $result = mysqli_query($conneciton, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        return true;
    }else{
        return false;
    }
}



function create_user($user_data){
    $conneciton = get_connection();
    $sql = "INSERT INTO users (user_name, full_name, email, gender, date_of_birth, password, user_type)
    VALUES ('{$user_data['user_name']}', '{$user_data['full_name']}', '{$user_data['email']}', '{$user_data['gender']}', '{$user_data['date_of_birth']}', '{$user_data['password']}','{$user_data['user_type']}')";
    $result = mysqli_query($conneciton, $sql);
    return $result;
}


function check_user_email($email){
    $conneciton = get_connection();
    $sql = "SELECT email FROM users WHERE email = '{$email}'";
    $result = mysqli_query($conneciton, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        return true;
    }else{
        return false;
    }
}


function user_name_exists($username){

    $conneciton = get_connection();
    $sql = "SELECT user_name FROM users WHERE user_name = '{$username}'";
    $result = mysqli_query($conneciton, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        return true;
    }else{
        return false;
    }

}
 function book_resort($r_data){
    $conneciton = get_connection();
    $sql = "INSERT INTO book_resort (user_name, date, Schedule, duration, p_type, n_people)
    VALUES ('{$r_data['user_name']}', '{$r_data['date']}', '{$r_data['Schedule']}', '{$r_data['duration']}', '{$r_data['p_type']}', '{$r_data['n_people']}')";
    $result = mysqli_query($conneciton, $sql);
    return $result;
 }

 function book_hotel($h_data){
    $conneciton = get_connection();
    $sql = "INSERT INTO book_hotel (user_name, date, Schedule, duration, p_type, n_people)
    VALUES ('{$h_data['user_name']}', '{$h_data['date']}', '{$h_data['Schedule']}', '{$h_data['duration']}', '{$h_data['p_type']}', '{$h_data['n_people']}')";
    $result = mysqli_query($conneciton, $sql);
    return $result;
 }

?>