<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="number">
    <button>Submit</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["number"])) {
        readNumber($_GET["number"]);
    }
}

function readNumber($number) {
    if ($number < 10) {
        echo numberOneDigit($number);
    } else if ($number < 100) {
        echo numberTwoDigit($number);
    }
}

function numberOneDigit($number) {
    $arr = ["zero","one","two","three","four","five","six","seven","eight","nine","ten"];
    return $arr[$number];
}

function numberTwoDigit($number) {
    $teen = [10 => "ten",11 => "eleven",12 => "twelve",13 => "thirteen",14 => "fourteen",15 => "fifteen",16 => "sixteen",17 => "seventeen",18 => "eighteen",19 => "nineteen"];
    $ty = [2 => "twenty",3 => "thirty",4 => "forty",5 => "fifty",6 => "sixty",7 => "seventy",8 => "eighty",9 => "ninety"];
    if ($number < 20) {
        return $teen[$number];
    } else if ($number % 10 == 0) {
        return $ty[$number[0]];
    } else {
        return $ty[$number[0]]." ".numberOneDigit($number[1]);
    }
}

function numberThreeDigit($number) {
    $ar = [1 => "one hundred",2 => "two hundred",3 => "three hundred",4 => "four hundred",5 => "five hundred",6 => "six hundred",7 => "seven hundred",8 => "eight hundred",9 => "nine hundred"];
    if ($number % 100) {
        return $ar[$number[0]];
    } else if ($number) {

    }
}





