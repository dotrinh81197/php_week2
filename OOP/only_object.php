<?php
class Application
{
    private static $instance;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Application();
            echo "Khởi tạo đối tượng";
        }
        return self::$instance;
    }
}

$app1 = Application::getInstance(); // khởi tạo đối tượng duy nhất

$app2 = Application::getInstance(); // đối tượng đã đc khởi tạo.
$app3 = new Application(); //Error (vì phương thức construct có access modifier là private)
