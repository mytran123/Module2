<?php
include_once "Circle.php";
include_once "Comparator.php";

class CircleComparator implements Comparator
{
    public function compare(object $circleOne, object $circleTwo): int
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();

        if ($radiusOne > $radiusTwo) {
            return 1;
        } else if ($radiusOne < $radiusTwo) {
            return -1;
        } else {
            return 0;
        }
    }
}