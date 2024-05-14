<?php 
    require_once('../model/userModel.php');

    $firstName=$_REQUEST['firstName'];
    $lastName=$_REQUEST['lastName'];
    $email=$_REQUEST['email'];
    $userName=$_REQUEST['userName'];
    $DOB=$_REQUEST['DOB'];
    $gender=$_REQUEST['gender'];
    $mobile=$_REQUEST['mobile'];
    $address=$_REQUEST['address'];
    $password=$_REQUEST['password'];
    $confirmPassword=$_REQUEST['confirmPassword'];


    if($firstName=="" || $lastName=="" || $mobile=="" || $email=="" || $userName=="" || $password=="" ){
        echo "Please fill-up the required fields";
    }
    elseif($password !== $confirmPassword) {
    header('location: ../view/signUpWrongPassword.php');
    }   
    else{
        $user = ['firstName'=> $firstName,'lastName'=> $lastName,'DOB'=> $DOB,'gender'=> $gender,'mobile'=> $mobile,'address'=> $address,'email'=> $email,'userName'=> $userName,'password'=>$password];

        $status = signUp($user);
        if($status){
            header('location: ../view/successSignUp.php');
        }else{
            echo "Error! Something Went Wrong";
        }

    }
?>