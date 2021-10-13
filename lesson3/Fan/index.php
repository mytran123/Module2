<?php
include_once "fan.php";
$fan1 = new Fan (3,true,10,"yellow");
$fan2 = new Fan (2,false,5,"blue");
echo ($fan1->toString()."<br>");
echo ($fan2->toString());
?>