<?php

function calculate($num1 , $num2 , $op = "")
{

   if($op == "a" || $op == "add" || $op == "")
   {
    return $num1 + $num2;
   }
   if($op == "s" || $op == "subtract")
   {
    return $num1 - $num2;
   }
   if($op == "m" || $op == "multiply")
   {
    return $num1 * $num2;
   }



}


echo calculate(10, 20); // 30
echo '<br>';
echo calculate(10, 20, "a"); // 30
echo '<br>';
echo calculate(10, 20, "s"); // -10
echo '<br>';
echo calculate(10, 20, "subtract"); // -10
echo '<br>';
echo calculate(10, 20, "multiply"); // 200
echo '<br>';
echo calculate(10, 20, "m"); // 200

?>
