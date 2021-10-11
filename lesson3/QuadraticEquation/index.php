<?php
include'QuadraticEquation.php';
$quadraticEquation = new QuadraticEquation(5,10,2);
echo 'Hệ số thứ nhất là: '. $quadraticEquation->geta(). '<br>';
echo 'Hệ số thứ hai là: '. $quadraticEquation->getb(). '<br>';
echo 'Hệ số thứ ba là: '. $quadraticEquation->getc(). '<br>';
echo 'Delta là: '. $quadraticEquation->getDiscriminant(). '<br>';
$quadraticEquation->calculate();