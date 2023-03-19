<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$space = "";


unset($chars[1]);   // To Remove 1
unset($chars[2]);   // To Remove 2
    foreach($chars as $letter)
    {
        $space.= $letter;
    }
echo ucfirst(strtolower($space));
// Output
"Elzero"

?>
