<!DOCTYPE html>
<html>
<body>

<?php
class TICKET {
  public static $value=345;
}

class x extends TICKET {
  public function xStatic() {
    return parent::$value;
  } 
}

// Get value of static property directly via child class
echo x::$value . "<br>";


// Get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?>
 
</body>
</html>
