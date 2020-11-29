<?php
class Rectangle
{
    public  $width;
    public $heigth;
    function __construct($width, $heigth)
    {
        $this->width = $width;
        $this->height = $heigth;
    }
    // tính diện tích
    public function getArea()
    {
        return $this->width * $this->height;
    }

    //tinh chu vi
    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}



$rectangle = new Rectangle(10, 20);

echo "width:" . $rectangle->width . "</br>"; // 0utput: 10
echo  "height:" . $rectangle->height . "</br>"; // 0utput: 20

echo "Area:" . $rectangle->getArea() . "</br>"; // Output: 200
echo  "Perimeter: " . $rectangle->getPerimeter() . "</br>"; // Output: 60

echo $rectangle->display();
