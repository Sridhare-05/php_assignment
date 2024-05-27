<?php
$cookie_name = "Sridhar";
$cookie_value = "Balaji";
setcookie($cookie_name, $cookie_value, time() + (5), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Welcome back' " . $cookie_name . " ' congrats!";
} else {
  echo "Welcome '" . $cookie_name . "' and Thank you!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>