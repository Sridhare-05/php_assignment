<!DOCTYPE html>
<html>
<body>

<?php
// Parent class
abstract class College {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function bio() : string; 
}

// Child classes
class Principal extends College {
  public function bio() : string {
    return "I am the High Priority of our College Decision maker Mr. $this->name!"; 
  }
}

class Staff extends College{
  public function bio() : string {
    return "I am the College lecturer ,My name is $this->name!"; 
  }
}

class Student extends College {
  public function bio() : string {
    return "I am the most intelligent student in our College,I am $this->name!"; 
  }
}

// Create objects from the child classes
$prin = new principal("Nohara");
echo $prin->bio();
echo "<br>";

$staff = new staff("John");
echo $staff->bio();
echo "<br>";

$stud = new student("Kohli");
echo $stud->bio();
?>
 
</body>
</html>
