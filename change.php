<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
print_r($_SESSION);
?>

</body>
</html>