<?php

if(isset($_POST["submit"]))
{
    
    // Grabbing the data
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $confirm_password = $_POST["confirm_password"];
    $email = $_POST["email"];
    
    
    // Instantiate SignupContr Class
    include "../classe/dbh.classes.php";
    include "../classe/signup.classes.php";
    include "../classe/signup-controller.classes.php";
    $signup = new SignupController($username , $pwd , $confirm_password ,$email );
    
    // Running Error handlers and user Signup 
    $signup->signupUser();

    // Going To Back To Front Page  
    header("location: ../index.php?error=none");


}
