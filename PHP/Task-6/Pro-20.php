<?php

$a = "10";


// Needed Ouput
echo (int)$a;
echo '<br>';
echo gettype((int)$a);
echo '<br>';

echo $a + 0;
echo '<br>';
echo gettype($a + 0);
echo '<br>';

echo $a * 1;
echo '<br>';
echo gettype($a * 1);
echo '<br>';

echo intval($a);
echo '<br>';
echo gettype(intval($a));



/*
// For The People Who Love Searching
10
"integer"
10
"integer"
*/
?>
