<?php
include_once "Shape.php";
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";

$circle = new Circle('Circle 01',3);
echo 'Circle size up: ' . $circle->calculateArea() . '<br/>';

$rectangle = new Rectangle('Rectangle 01',3,4);
echo 'Rectangle size up: ' . $rectangle->calculateArea() . '<br/>';

$square = new Square('Square 01',3);
echo 'Square size up: ' . $square->calculateArea() . '<br/>';

$arr = [$circle,$rectangle,$square];
foreach ($arr as $value) {
    echo 'My size is: ' . $value->getsize();

}