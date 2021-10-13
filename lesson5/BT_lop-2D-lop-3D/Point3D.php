<?php

class Point3D extends Point2D
{
    public $z;

    public function __construct($x,$y,$z)
    {
        parent::__construct($x,$y);
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setXYZ($x,$y,$z)
    {
        parent::setXY($x,$y);
        $this->z = $z;
    }

    public function getXYZ()
    {
        return $arr = [$this->x,$this->y,$this->z];
    }

    public function toString()
    {
        parent::toString() . " " . $this->z;
    }
}