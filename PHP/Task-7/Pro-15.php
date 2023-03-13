<?php

$mix = [1, 2, "A", "B", "C", 3, 4];
$a = 0;
for($i=0;$i<count($mix);$i++)
{

    if(gettype($mix[$i]) == "integer")
    {
        echo $mix[$i];
        echo '<br>';
        $a +=1;
    }


}
echo $a . " Numbers Printed" . "<br>";
echo $i - $a . " Letters Ignored" . "<br>";




// // Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"


?>
