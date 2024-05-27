<?php
// Interface definition
interface Animal {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " Meow "."<br>";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark "."<br>";
  }
}

class Cow implements Animal {
  public function makeSound() {
    echo " MMaaa "."<br>";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$cow = new Cow();
$animals = array($cat, $dog, $cow);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}
?>