<?php

class Login extends Dbh
{

    
 protected function getUser($username , $pwd)
 {
    $stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_username
    = ? OR users_email = ?;');


    if(!$stmt->execute(array($username ,  $username)))
    {
        $stmt = null;
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

if(!$stmt->execute(array($username , $pwd)))
{
    $stmt = null;
    header("location: ../index.php?error=stmtfailed");
    exit();
}
   $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
   $checkPwd = password_verify($pwd ,$pwdHashed[0]["users_pwd"]);

   if($checkPwd == false)
   {
       $stmt = null;
       header("location: ../index.php?error=wrongpassword");
       exit();
   }
   elseif($checkPwd == true)
   {
    $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_username
    = ? OR users_email = ? AND users_pwd = ?;');
      
    if(!$stmt->execute(array($username ,$username ,   $pwd)))
    {
        $stmt = null;
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    
   if($stmt->rowCount() == 0)
   {
       $stmt = null;
       header("location: ../index.php?error=usernotfound");
       exit();
   }

   $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

   session_start();
   $_SESSION["userid"] = $user[0]["user_id"];
   $_SESSION["useruid"] = $user[0]["user_uid"];

   }

    $stmt = null;
 }




}

?>