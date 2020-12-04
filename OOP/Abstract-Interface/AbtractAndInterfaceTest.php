<?php
include(dirname(__FILE__) . '/Animals/Chicken.php');
include(dirname(__FILE__) . '/Animals/Tiger.php');

echo "----Animals  ";
$animals[0] = new Tiger;
$animals[1] = new Chicken;
foreach ($animals as $animal) {
    echo ($animal->makeSound() . ' ');
    if ($animal instanceof Chicken) {
        echo $animal->howtoEat() . ' ';
    }
}
