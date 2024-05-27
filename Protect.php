<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  protected function info() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

class Gova extends Fruit {
  public function message() {
    echo "Am I a fruit or a Gova? " . "<br>";
    // Call protected method from within derived class 
    $this -> info();
  }
}

$gova = new Gova("Gova", "green"); 
$gova->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
?>