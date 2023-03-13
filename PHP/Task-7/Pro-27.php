<?php

// Write Function Content Here
$greet = function($someone)
{
    return "Hello $someone";
};
// Needed Output
echo $greet("Osama"); // Greetings
echo '<br>';
$greet = fn($someone) => "Hello $someone";

// Needed Output
echo $greet("Osama"); // Greetings


?>
