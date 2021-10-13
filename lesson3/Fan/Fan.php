<?php
class Fan {
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed = 1;
    private $on = false;
    private $radius = 5;
    private $color = "blue";

    public function __construct($speed,$on,$radius,$color)
    {
        $this->speed = $speed;
        $this->on = $on;
        $this->radius = $radius;
        $this->color = $color;
    }

    public function setSpeed($speed)
    {
        $this->speed;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setOn($on)
    {
        $this->on;
    }

    public function getOn()
    {
        return $this->on;
    }

    public function setRadius($radius)
    {
        $this->radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setColor($color)
    {
        $this->color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function toString()
    {
        if ($this->getOn() === true) {
            return "Fan is on". " " . $this->speed . " " . $this->radius . " " . $this->color;
        } else {
            return "Fan is off". " " . $this->speed . " " . $this->radius . " " . $this->color;
        }
    }
}