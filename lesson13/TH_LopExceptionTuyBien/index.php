<?php
include_once "DivideByZeroException.php";

function divide($numerator, $denominator) {
    if ($denominator === 0) {
        throw new DivideByZeroException();
    }
    return $numerator / $denominator;
}

$result = divide(100,5);
echo $result;
$result = divide(100,0);
echo $result;