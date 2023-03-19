<?php
$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here
//echo str_repeat($str , $num) . '<br>';
echo strtolower(chunk_split(str_repeat($str , $num)  , $num , $char))  . '<br>';
// aaa_aaa_aaa_




?>
