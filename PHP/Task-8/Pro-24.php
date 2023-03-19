<?php
$nums = [1, 2, 3, 4, 5, 6];
$reseve = [];
for($i = 0; $i<6; $i++)
{
    $random = rand(0,1);
    if($random)
    array_unshift($reseve, $nums[$i]);
    else
    array_push($reseve, $nums[$i]);
}

$nums = $reseve;

echo '<pre>';
print_r($nums);
echo '<pre>';

// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )
//
// // Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )
?>
