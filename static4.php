<!DOCTYPE html>
<html>
<body>

<?php
class Website {
  protected static function getWebsiteName() {
    return "Whereitz.com";
  }
}

class Whereitz extends Website {
  public $websiteName;
  public function __construct() {
    $this -> websiteName = parent::getWebsiteName();  // 'parent' keyword is used to call the static method in child class to parent class.
  }	
}

$domainname = new Whereitz;
echo $domainname -> websiteName;
?>
 
</body>
</html>