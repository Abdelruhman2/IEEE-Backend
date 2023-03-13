<?php

$num = 2;
while ($num < 520) {
  // Your Code Here
  if($num==2)
  {
    $num =1;
    echo $num;
    echo "<br>";
   }
   else
   {
    $num = $num *2 + 2;
    if($num < 520)
    echo $num;
    echo "<br>";

   }

}

// // Needed Output
// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382
?>
