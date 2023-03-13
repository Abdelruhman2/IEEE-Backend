<?php

$help_num = 4;
$nums = [2, 4, 5, 6, 10];

for($i=0;$i<count($nums);$i++)
{

    echo $nums[$i] . " + " . $nums[$help_num - $i] . " = " . $nums[$i] + $nums[$help_num - $i] . '<br>';

}


// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"

?>
