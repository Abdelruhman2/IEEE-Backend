<?php

$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

// Write Line Here
next($names) . "<br>";
// Write Line Here
next($names). "<br>";
echo current($names) . "<br>"; // "Sayed"

// Write Line Here
end($names) . "<br>";
echo current($names) . "<br>"; // "Ali"

// Write Line Here
reset($names) . "<br>";
echo current($names) . "<br>"; // "Osama"

// Write Line Here
end($names) . "<br>";
// Write Line Here
prev($names) . "<br>";
echo current($names) . "<br>"; // "Mahmoud"





?>
