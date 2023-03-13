<?php


$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    echo "The Request Method Is Post And Username Is " . $_POST["user"];

    echo '<br>';
    if($admins[0] == $_POST["user"])
    {
        echo "This Username Osama Is Admin";
    }
    elseif($admins[1] == $_POST["user"])
    {
        echo "This Username Ahmed Is Admin";
    }
    elseif($admins[2] == $_POST["user"])
    {
        echo "This Username Sayed Is Admin";
    }
    else
    {
        echo "Unkonwn Name";
    }

}


?>

<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>
