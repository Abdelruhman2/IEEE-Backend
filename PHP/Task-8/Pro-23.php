<?php
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];



echo '<pre>';
print_r(array_filter($mix,function($num){if (gettype($num) == "integer" && ($num % 2 != 0)) {return $num;}} ));
echo '</pre>';




// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )






?>
