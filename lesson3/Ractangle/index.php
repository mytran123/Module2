<?php
include_once "Rectangle.php";

$weight = 10;
$height = 20;
$rectangle = new Rectangle($weight, $height);

echo $rectangle->width;
echo "<br>";
echo $rectangle->height;
echo "<br>";
$rectangle->width = 20;
$rectangle->height = 30;

echo $rectangle->width;
echo "<br>";
echo $rectangle->height;
echo "<br>";
echo $rectangle->getArea();
echo "<br>";
echo $rectangle->getPerimeter();
echo "<br>";
echo ("Your Rectangle". $rectangle->display());