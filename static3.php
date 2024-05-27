<!DOCTYPE html>
<html>
<body>

<?php
class A {
  public static function welcome() {
    echo "Hello Sridhar!";
  }
}

class B {
  public function message() {
    A::welcome();
  }
}

$sub = new B();
echo $sub -> message(); 
?>
 
</body>
</html>
