<?php

class MoveablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($x,$y,$xSpeed,$ySpeed)
    {
        return parent::__construct($x,$y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setXSpeed($xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setYSpeed($ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }


}