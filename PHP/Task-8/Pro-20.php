<?php

$nums = [10, 100, -20, 50, 30];

$max = $nums[1];
for ($i=0;$i < count($nums);$i++)
{
    if($max < $nums[$i])
    {
        $max = $nums[$i];
    }
}
echo $max;
// Output
//100



?>
