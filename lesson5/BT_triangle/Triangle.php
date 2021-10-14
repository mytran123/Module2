<?php

class Triangle extends Shape
{
    public $side1;
    public $side2;
    public $side3;

    public function __construct($name,$side1,$side2,$side3)
    {
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function getSide1()
    {
        return $this->side1;
    }

    public function setSide1($side1): void
    {
        $this->side1 = $side1;
    }

    public function getSide2()
    {
        return $this->side2;
    }

    public function setSide2($side2): void
    {
        $this->side2 = $side2;
    }

    public function getSide3()
    {
        return $this->side3;
    }

    public function setSide3($side3): void
    {
        $this->side3 = $side3;
    }

    public function getPerimeter()
    {
        $peri = $this->side1 + $this->side2 + $this->side3;
        return $peri;
    }

    public function getArea()
    {
        $p = ($this->getPerimeter())/2;
        return sqrt($p * ($p - $this->side1) * ($p - $this->side2) * ($p - $this->side3));
    }

    public function toString()
    {
        echo "I am a shape. My name is ".$this->name." . My color is ".$this->color."<br/>"."Side1: ".$this->side1.", Side2: ".$this->side2.", Side3: ".$this->side3."<br>"."Area: ".$this->getArea()."<br>"." Perimeter: ".$this->getPerimeter()."<br>";
    }
}