<?php


function greeting($name , $gender = "" )
{

    return "Hello " . ($gender=="Male"?"Mr ":($gender =="Female"? "Miss ":" ")) .  $name . "<br>";


}
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh




?>
