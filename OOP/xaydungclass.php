<?php
class Animals
{
    function __construct()
    {
    }
    function getInfo()
    {
    }
    public  $height;
    public  $age;
}
class Person
{
    private $name;
    protected $age;
    function __construct($name, $age = 1)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function getInfo()
    {
        return 'name :' . $this->name . ' age: ' . $this->age . "</br>";
    }
}

$person = new Person('Vu'); // $age =1
echo $person->getInfo(); //
$person1 = new Person("ychi", 25); //$age =25
echo $person1->getInfo();


class Task
{

    private $title;
    private $content;
    private $status;
    static $hobies = 'Game';

    function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
        $this->status = $status = false;
    }

    function getTitle()
    {
        return $this->title;
    }

    function setTitle($new_title)
    {
        $this->title = $new_title;
    }

    function getContent()
    {
        return $this->content;
    }

    function setContent($new_content)
    {
        $this->content = $new_content;
    }
    function getStatus()
    {
        return $this->status;
    }
    public function getHobies()
    {
        return self::$hobies;
    }
}
$task1 = new Task("Go market", "Buy food and drink");
$task2 = new Task("Go to Codegym center", "Learn to code");
echo $task1->getTitle() . "</br>";
echo $task1->getContent() . "</br>";
if ($task1->getStatus()) {
    echo "Finished";
} else {
    echo "Not yet finished";
}

$tasks = [
    new Task('Cooking', 'Cooking rice'),
    new Task('Cleaning', 'Clean floor'),
    new Task('Washing', 'Washing dishes')

];
$stasks[] = $task1;
