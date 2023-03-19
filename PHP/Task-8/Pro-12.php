<?php


$nums = [5, 10, 20, 5, 30, 40];

$filter = 5;
function checknumber($n)
{
    return $n != 5;

}
function add($n1 , $n2)
{
    return $n1 + $n2;
};
echo '<pre>';
echo (array_sum(array_filter($nums , "checknumber")));
echo '</pre>';

// Output
// 100











?>
