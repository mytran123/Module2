<?php
include_once "StopWatch.php";

$newStopWatch = new StopWatch();

function tinhtong(){
    $sum = 0;
    for ($i = 1; $i <= 100000; $i++) {
        $sum = $sum + $i;
    }
    echo $sum;
}

$newStopWatch->start();
tinhtong();
$newStopWatch->stop();
echo "<br>";
echo $newStopWatch->getElapsedTime();
