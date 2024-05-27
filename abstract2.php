<!DOCTYPE html>
<html>
<body>

<?php
abstract class Family {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class Couple extends Family {
  public function prefixName($name) {
    if ($name == "Elumalai") {
      $prefix = "Mr.";
    } elseif ($name == "Punitha") {
      $prefix = "Mrs.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$name}";
  }
}

$couple = new Couple;
echo $couple->prefixName("Elumalai");
echo "<br>"; 
echo $couple->prefixName("Punitha");
?>
 
</body>
</html>
