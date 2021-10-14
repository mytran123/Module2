<?php
include_once('Shape.php');
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

//$circle = new Circle('Circle 01', 3);
//echo 'Circle area: ' . $circle->calculateArea() . '<br />';
//echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

//$cylinder = new Cylinder('Cylinder 01', 3, 4);
//echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
//echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

//$rectangle = new Rectangle('Rectangle 01', 3, 4);
//echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
//echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

//$square = new Square('Square 01', 4);
//echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
//echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';

$shape[0] = new Circle('Circle01', 3);
$shape[1] = new Cylinder('Cylinder01', 3, 4);
$shape[2] = new Rectangle('Rectangle01', 3,4);
$shape[3] = new Square('Square01', 4);

foreach ($shape as $value) {
    if ($value instanceof Colorable) {
        echo $value->howToColor() . '<br/>';
    } else {
        echo $value->show() . '<br/>';
        echo "Area: " . $value->calculateArea() . "<br/>";
        echo "Perimeter: " . $value->calculatePerimeter() . '<br/>';
    }
}