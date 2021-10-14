<?php
include_once "Shape.php";
include_once "Resizeable.php";

class Circle extends Shape implements Resizeable
{
    public $radius;

    public function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius,2);
    }

    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }

    public function resize($doublePercent)
    {
        $this->setRadius($doublePercent * $this->getRadius());
    }

    public function getSize()
    {
        return $this->getRadius();
    }
}