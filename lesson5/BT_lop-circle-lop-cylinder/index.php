<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle = new Circle(2,"blue");
echo 'Circle area: ' . $circle->calculateArea() . '<br />';

$cylinder = new Cylinder(2,"white",4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
