<!DOCTYPE html>
<html>
<body>

<?php
class Bike {
  const MOTOR = "Thank you for visiting our ShowRoom";
  public function bye() {
    echo self::MOTOR; // By using IN side of the Class 'self' keyword.
  }
}

$bike = new Bike();
$bike->bye();
?>

</body>
</html>