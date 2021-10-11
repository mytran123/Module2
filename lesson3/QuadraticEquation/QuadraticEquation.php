<?php
class QuadraticEquation{
    private $a;
    private $b;
    private $c;

    public function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }

    public function getDiscriminant()
    {
        $delta = ($this->b * 2) - 4 * $this->a * $this->c;
        return $delta;
    }

    public function getRoot1()
    {
        $r1 = (-$this->b + sqrt(getDiscriminant()))/2 * $this->a;
        return $r1;
    }

    public function getRoot2()
    {
        $r2 = (-$this->b - sqrt(getDiscriminant()))/2 * $this->a;
        return $r2;
    }

    public function calculate()
    {
        if ($this->getDiscriminant() > 0) {
            echo "nghiệm thứ nhất là: " . $this->getRoot1() . "<br>";
            echo "nghiệm thứ hau là: " . $this->getRoot2();
        } else if ($this->getDiscriminant() === 0) {
            echo "có nghiệm kép r1 = r2 = " . $this->getRoot1();
        } else {
            echo "Phương trình vô nghiệm";
        }
    }
}