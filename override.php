<!DOCTYPE html>
<html>
<body>

<?php
class Computer {
  public $name;
  public $ram;
 
  public function __construct($name, $ram) {
    $this->name = $name;
    $this->ram = $ram; 
     
  }
  public function feature() {
    echo "The System is {$this->name} and the Ram is {$this->ram} GB."; 
  }
}

class ThinkPad extends Computer {
  public $rom;
  public function __construct($name, $ram,$rom) {
    $this->name = $name;
    $this->ram = $ram;
    $this->rom = $rom;

  }
  public function feature() {
    echo "The ThinkPad is {$this->name}, The Ram is {$this->ram} GB, And the Rom is {$this->rom} GB."; 
  }
}

$think = new ThinkPad("Lenovo", "8",256);
$think->feature();
?>
 
</body>
</html>