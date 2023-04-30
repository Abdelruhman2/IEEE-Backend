<?php

class SignupController extends Signup{


private $username;
private $pwd;
private $confirm_password;
private $email;




public function __construct($username , $pwd , $confirm_password  ,$email )
{
    $this->username = $username;
    $this->pwd = $pwd;
    $this->confirm_password = $confirm_password;
    $this->email = $email;
    
   
} 

public function signupUser()
{

    if($this->emptyinput() == false)
    {
        // echo "Empty input!";
        header("location: ../index.php?error=emptyinput");
        exit();
    }
    if($this->invalidUsername() == false)
    {
        // echo "Empty input!";
        header("location: ../index.php?error=username");
        exit();
    }
    if($this->invalidEmail() == false)
    {
        // echo "invalid Email!";
        header("location: ../index.php?error=email");
        exit();
    }
    if($this->passwordmatch() == false)
    {
        // echo "Password Don't match!";
        header("location: ../index.php?error=passwordmatch");
        exit();
    }
    if($this->userTakenCheck() == false)
    {
        // echo "Username or email taken!";
        header("location: ../index.php?error=useroremailtaken");
        exit();
    }

    $this->setUser($this->username , $this->pwd  , $this->email );
}

private function emptyinput()
{

    $result;
    if(empty($this->username) || empty($this->pwd) || empty($this->confirm_password || empty($this->email))  )
    {

        $result = false;

    }
    else 
    {
        $result = true;
    }
    return $result;

}

private function invalidUsername()
{
    $result;
    if(!preg_match("/^[a-zA-z0-9]*$/" , $this->username))
    {
        $result = false;

    }
    else 
    {
        $result = true;
    }
    return $result;
}

private function invalidEmail()
{
    $result;
    if(!filter_var($this->email , FILTER_VALIDATION_EMAIL))
    {
        $result = false;

    }
    else 
    {
        $result = true;
    }
    return $result;
}

private function passwordmatch()
{
    $result;
    if($this->pwd !== $this->confirm_password)
    {
        $result = false;

    }
    else 
    {
        $result = true;
    }
    return $result;
}


private function userTakenCheck()
{
    $result;
    if(!$this->checkUser($this->username , $this->email))
    {
        $result = false;

    }
    else 
    {
        $result = true;
    }
    return $result;
}
}
