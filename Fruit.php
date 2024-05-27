<!DOCTYPE html>
<html>
<body>

<?php
//INHERITANCE EXAMPLE
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "And the fruit is {$this->name} and the color is {$this->color}."."<br>"; 
  }
}

// Mango is inherited from Fruit
class Mango extends Fruit {
  public function message() {
    echo "Mango is so sweet to Eat. " . "<br>"; 
  }
}

$mango = new Mango("Mango", "yellow");
$mango->message();
$mango->intro();
?>
 
</body>
</html>