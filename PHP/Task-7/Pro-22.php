<?php

function multiply (...$input)
{
    $mult = 1;
    foreach ($input as $nums) :
    // if(gettype($nums) == "string")
    // {

    //     $mult*=1;

    // }
    if(gettype($nums) == "integer")
    {

        $mult*=$nums;

    }
    if(gettype($nums) != "string" && gettype($nums) == "double")
    {
        $mult *= (int)$nums;
    }


endforeach;
echo $mult;
}


echo multiply(10, 20); // 200
echo '<br>';
echo multiply("A", 10, 30); // 300
echo '<br>';
echo multiply(100.5, 10, "B"); // 1000


?>
