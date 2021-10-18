<?php
include_once "MyList.php";

$myList = new MyList();

$myList->add(2);
$myList->add(4);
$myList->add(6);
$myList->add(8);

$myList->indexOf(6);
echo "<pre>";
print_r($myList);