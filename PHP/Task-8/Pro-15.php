<?php

$chars = ["A", "B", "C"];

// First
array_push($chars , "D");


// Sec
$chars[] = "D";


// third
$chars = array_merge($chars , ["D"]);


// Forth
array_splice($chars, 4, 1, "D");

echo '<pre>';
print_r($chars);
echo '</pre>';

// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )



?>
