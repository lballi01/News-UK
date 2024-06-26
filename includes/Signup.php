<?php

if (isset($_POST["submit"])){

    //Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];


    //Insanitate Signup Controller class
    include_once "../Controllers/SignupController.php";
    include_once "../Model/SignUpModel.php";
    include_once "../config/dbh.php";
    $signup = new SignupController($uid, $pwd, $pwdRepeat, $email);

    //Running Error Handlers and User Signup
    $signup -> signupUser();

    //Redirecting the user to the homepage
    header("Location:../frontend/Register.php?signup=success");
}