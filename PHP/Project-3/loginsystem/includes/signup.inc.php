<?php

if(isset($_POST["submit"]))
{
    echo 'Succssful' ;
    // Grabbing the data
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $confirm_password = $_POST["confirm_password"];
    $email = $_POST["email"];
    
    
    // Instantiate SignupContr Class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-controller.classes.php";
    $signup = new SignupController($username , $pwd , $confirm_password ,$email );
    
    // Running Error handlers and user Signup 
    $signup->signupUser();

    // Going To Back To Front Page  
    header("location: ../index.php?error=none");


}

else 
{
    echo 'ERROR ! ';

}
