<?php
include_once('shape.php');
class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name); // ghi de lop cha 
        $this->width = $width;
        $this->height = $height;
    }
    // tinh dien tich
    public function calculateArea()
    {
        return $this->height * $this->width;
    }
    // tinh chu vi
    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }
}
