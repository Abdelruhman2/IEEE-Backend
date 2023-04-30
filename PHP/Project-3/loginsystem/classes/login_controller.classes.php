<?php


class LoginController extends Login{

private $username;
private $pwd;


public function __construct($username  , $pwd  )
{
    $this->username = $username;
    $this->pwd = $pwd;
   

} 

public function loginUser()
{

    if($this->emptyinput() == false)
    {
        // echo "Empty input!";
        header("location: ../index.php?error=emptyinput");
        exit();
    }
   
    $this->getUser($this->username , $this->pwd );
}

private function emptyinput()
{

    $result;
    if(empty($this->username) || empty($this->pwd) )
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

