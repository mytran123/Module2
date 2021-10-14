<?php
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";

$circle = new Circle('Circle 01',3);
echo 'Circle area: ' . $circle->calculateArea() . '<br/>';

$rectangle = new Rectangle('Rectangle 01',3,4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br/>';

$square = new Square('Square 01',3);
echo 'Square area: ' . $square->calculateArea() . '<br/>';

$arrayShape = [$circle,$rectangle,$square];
foreach ($arrayShape as $value) {
    echo 'My size is: ' . $value->getSize() . '<br>';
}
foreach ($arrayShape as $value) {
    $value->resize(rand(1,100));
}
foreach ($arrayShape as $value) {
    echo "My new size is: " . $value->getSize() . '<br>';
}