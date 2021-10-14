<?php
include_once "Shape.php";
include_once "Resizeable.php";

class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name,$width,$height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width): void
    {
        $this->width = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height): void
    {
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }

    public function calculatePerimeter()
    {
        return ($this->width + $this->height) * 2;
    }

    public function resize($doublePercent)
    {
        $this->setWidth($doublePercent * $this->getWidth());
        $this->setHeight($doublePercent * $this->setHeight());
    }

    public function getSize()
    {
        return $this->getWidth() . "," . $this->getHeight();
    }
}