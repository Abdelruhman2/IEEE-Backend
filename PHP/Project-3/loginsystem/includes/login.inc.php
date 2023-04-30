<?php

if(isset($_POST["submit"]))
{
    // Grabbing the data
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    
    
    // Instantiate LoginContr Class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login_controller.classes.php";
    $login = new LoginController($username , $pwd );
    
    // Running Error handlers and user Signup 
    $login->loginUser();

    // Going To Back To Front Page  
    header("location: ../index.php?error=none");


}



