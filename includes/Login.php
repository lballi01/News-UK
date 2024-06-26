<?php

if (isset($_POST["submit"])){

    //Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];



    //Insanitate Signup Controller class
    include_once "../Controllers/LoginController.php";
    include_once "../Model/LoginModel.php";
    include_once "../config/dbh.php";
    $login = new LoginController($uid, $pwd);

    //Running Error Handlers and User Signup
    $login -> loginUser();

    //Redirecting the user to the homepage
    header("Location:../index.php?Login=success");
}