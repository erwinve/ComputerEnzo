<?php

if(isset($_POST['submit'])){
    
    //connect to db
    include_once 'dbconnect.php';

    //define variables
    $firstname = mysqli_real_escape_string($_POST['firstname']);
    $lastname = mysqli_real_escape_string($_POST['lastname']);
    $username = mysqli_real_escape_string($_POST['username']);
    $email = mysqli_real_escape_string($_POST['email']);
    $password = mysqli_real_escape_string($_POST['password']);
    $adress = mysqli_real_escape_string($_POST['adress']);
    $hnumber = mysqli_real_escape_string($_POST['hnumber']);
    $city = mysqli_real_escape_string($_POST['city']);

    if(empty($username) || empty($username) || empty($email) || empty($password) || empty($lastname) || empty($adress) || empty($hnumber) || empty($city)){
        header('Location: ../register.php');
        exit();
    }
    else{
        if(!preg_match("/^[a-zA-Z]*$", $firstname) || !preg_match("/^[a-zA-Z]*$", $lastname) || !preg_match("/^[a-zA-Z]*$", $adress) || !preg_match("/^[a-zA-Z]*$", $hnumber) || !preg_match("/^[a-zA-Z]*$", $city)){
            header('Location: ../register.php');
            exit();
        }
    }
}
else{
    header('Location: ../register.php');
    exit();
}