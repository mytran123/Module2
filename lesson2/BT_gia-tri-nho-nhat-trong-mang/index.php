<?php
$arr = [9,7,2,6,5,8,6,4];
$min = $arr[0];
function findMin($arr) {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}