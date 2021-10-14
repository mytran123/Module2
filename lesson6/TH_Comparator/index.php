<?php
include_once "CircleComparator.php";

$circleOne = new Circle("circle",6);
$circleTwo = new Circle("circle",4);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne,$circleTwo));