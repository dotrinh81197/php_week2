<?php
class QuadraticEquation
{
    private $a;
    private $b;
    private $c;
    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    function getA()
    {
        $this->a;
    }
    function getB()
    {
        $this->b;
    }
    function getC()
    {
        $this->c;
    }
    function getDiscriminant()
    {
        return $delta = ($this->b) * ($this->b) - 4 * ($this->a) * ($this->c);
    }
    function getRoot1()
    {
        return $r1 = (-$this->b + sqrt(($this->b * $this->b) - 4 * ($this->a) * ($this->c))) / 2 * $this->a;
    }
    function getRoot2()
    {
        return $r2 = (-$this->b - sqrt(($this->b * $this->b) - 4 * ($this->a) * ($this->c))) / 2 * $this->a;
    }
}
