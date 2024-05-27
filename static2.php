<!DOCTYPE html>
<html>
<body>

<?php
class Table {
  public static function wood() {
    echo "Furniture Table!";
  }
  public function __construct() {
    self::wood();
  }
}

new Table();
?>
 
</body>
</html>