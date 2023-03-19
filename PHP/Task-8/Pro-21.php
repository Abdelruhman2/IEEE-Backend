<?php

$nums = [10, 100, -20, 50, 30];

$min = $nums[1];
for ($i=0;$i < count($nums);$i++)
{
    if($min > $nums[$i])
    {
        $min = $nums[$i];
    }
}
echo $min;
// Output
//-20



?>
