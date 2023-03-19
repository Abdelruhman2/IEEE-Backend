<?php
$chars = ["o", "r", "e", "z", "l", "E"];
$long = 5;

$reverse;
for ($i = $long; $i >= 0;$i--)
{
    $reverse[] = $chars[$i];
}
$result = "";

for ($J = 0; $J <= $long;$J++)
{
    $result .= $reverse[$J];
}
echo $result;
// Output
//"Elzero"







?>
