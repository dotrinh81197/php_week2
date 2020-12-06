<?php

namespace Circle1;

class Circle
{
    public $radius;
    public $color;

    function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    // tính diện tích 
    public function getArea()
    {
        return $circleArea = $this->radius * $this->radius * pi();
    }
    public function showInfomation()
    {
        echo 'Circle :';
        echo "Radius : " . $this->radius . "</br>";
        echo "Color: " . $this->color . "</br>";
        echo "Area: " . $this->getArea() . "</br>";
    }
}

class Cylinder extends Circle
{
    public $height;
    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }
    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }
    // tính thể tích
    public function getVolume()
    {
        $circleArea =  parent::getArea();
        return $cylinderVolume = $circleArea * $this->height; // chỗ này nè a
    }
    public function showInfomation()
    {
        echo 'Cylinder :' . "</br>";
        echo "Radius : " . $this->radius . "</br>";
        echo "Color: " . $this->color . "</br>";
        echo "Height: " . $this->height . "<br>";
        echo "Area: " . $this->getArea() . "</br>";
        echo "Volume: " . $this->getVolume();
    }
}

$circle = new Circle(5, "Red");
$circle->showInfomation();
$cylinder = new Cylinder(5, "Yellow", 6);
$cylinder->showInfomation();
