<?php
include_once "Point.php";
include_once "MoveablePoint.php";

$point = new Point(2,4);
echo "Point: ";
$point->toString();
echo "<br/>";

$move = new MoveablePoint(2,4,6,8);
echo "<br/>";
echo "Moveable Point: ";
echo "<br/>";
$move->toString();
$move->move();