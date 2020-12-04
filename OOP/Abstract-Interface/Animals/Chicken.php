<?php
include_once(dirname(__FILE__) . './../AbstractClass/Animal.php');
include_once(dirname(__FILE__) . '/../Interface/Edible.php');

class Chicken extends Animal
{
  public function makeSound()
  {
    return "Chicken : cluck - cluck!";
  }
  public function howtoEat()
  {
    return " Could be fried";
  }
}
// $chicken = new Chicken;
// echo $chicken->makeSound();
