<?php

class Signup extends Dbh
{

    
 protected function setUser($username , $pwd, $email )
 {
    $stmt = $this->connect()->prepare('INSERT INTO users (users_username , users_pwd ,
     users_email) VALUES (? , ? , ?);');

    $hashedPWd = password_hash($pwd , PASSWORD_DEFAULT);

    if(!$stmt->execute(array($username , $email , $hashedPWd)))
    {
        $stmt = null;
        header("location: ../login.php?error=stmtfailed");
        exit();
    }

   $stmt = null;

 }




 protected function checkUser($username , $email)
 {
    $stmt = $this->connect()->prepare('SELECT users_username FROM users WHERE users_username = ? OR users_email = ?;');

    if(!$stmt->execute(array($username , $email)))
    {
        $stmt = null;
        // location: ../login.php
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    $resultCheck;
    if($stmt->rowCount() > 0)
    {
        $resultCheck = false;
    }
    else
    {
        $resultCheck = true;
    }

    return $resultCheck;



 }



}


