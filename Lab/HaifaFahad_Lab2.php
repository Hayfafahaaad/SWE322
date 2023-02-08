<?php

echo "<h1> Basics of a Calculator </h1>";

function add ($x, $y){
    return ($x + $y);
}

function subtract ($x, $y){
    return ($x - $y);
}

function multiply ($x, $y){
    return ($x * $y);
}

function divide ($x, $y){
    return ($x / $y)."<br>";
}


echo "5 + 10 = " . add(5,10) . "<br>";
echo "13 - 7 = " . subtract(13,7) . "<br>";
echo "5 * 4 = " . multiply(5,4). "<br>";
echo "12 / 3 = " . divide(12,3);
?>