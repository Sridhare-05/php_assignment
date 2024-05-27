<!DOCTYPE html>
<html>
<body>

<?php
/* variable to check */
$int = 120;

/* min value */
$min = 1;
/* max value */
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  echo("$int Variable value is not within the legal range");
} else {
  echo("$int Variable value is within the legal range");
}
?>

</body>
</html>
