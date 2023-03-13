<?php

$nums = [1, 13, 12, 20, 51, 17, 30];

for($i=0;$i<count($nums);$i++)
{
    $d = 0;

    if($nums[$i] % 2 == 0)
    {
       echo $d = $nums[$i] / 2 . '<br>';
    }

}

// Output
// 6
// 10
// 15




?>
