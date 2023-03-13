<?php

function check_status($a, $b, $c)
{
    // Function Code Here
    foreach(func_get_args() as $item):

        if(gettype($item)=="integer")
        {$b =$item;}
        if(gettype($item)=="string")
        { $a =$item;}
        if(gettype($item)=="boolean")
        { $c =$item;}

endforeach;
return "Hello $a, Your Age Is $b, You Are ". ($c== true?"Available":"Not Available") ." For Hire<br>";

}
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
?>
