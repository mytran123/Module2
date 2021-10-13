<?php

class Point2D
{
    public $x;
    public $y;

    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX($x): void
    {
        $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($y): void
    {
        $this->y = $y;
    }

    public function setXY($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        return $arr = [$this->x,$this->y];
    }

    public function toString()
    {
        echo $this->x . " " . $this->y;
    }
}