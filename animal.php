<?php

abstract class Animal {
    abstract public function eat();
    abstract public function makeSound();
}

class Dog extends Animal {
    public function eat() {
        echo "Dog Eats Cookies.\n";
    }
    
    public function makeSound() {
        echo " Sound: Lol Lol!\n";
    }
}

class Cat extends Animal {
    public function eat() {
        echo "Cat drinks Milk!.\n";
    }
    
    public function makeSound() {
        echo " Sound: Meow Meow!\n";
    }
}

class Bird extends Animal {
    public function eat() {
        echo "Bird Eats Fruits!.\n";
    }
    
    public function makeSound() {
        echo "Sound: Tweet!\n";
    }
}


$dog = new Dog();
$dog->eat(); 
$dog->makeSound(); 
echo "<br>";

$cat = new Cat();
$cat->eat(); 
$cat->makeSound(); 
echo "<br>";

$bird = new Bird();
$bird->eat(); 
$bird->makeSound();
?>
