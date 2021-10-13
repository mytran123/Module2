<?php
include_once "Point2D.php";
include_once "Point3D.php";

$point2D = new Point2D(2,3);
$point2D->toString();
echo 'x = ' . $point2D->getx() . '<br/>';
echo 'y = ' . $point2D->gety() . '<br/>';
var_dump($point2D->getXY());

$point3D = new Point3D(2,3,4);
$point3D->toString();
echo 'x = ' . $point3D->getX() . '<br/>';
echo 'y = ' . $point3D->getY() . '<br/>';
echo 'z = ' . $point3D->getZ() . '<br/>';
var_dump($point3D->getXYZ());