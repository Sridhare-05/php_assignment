<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Tables</title>
</head>
<body>

<h2>Multiplication Table</h2>

<?php

$table = isset($_GET['table']) ? (int)$_GET['table'] : 1;

$max = isset($_GET['max']) ? (int)$_GET['max'] : 15;

echo "<h3>Table of $table:</h3>";
echo "<table border='1'>";

for ($i = 1; $i <= $max; $i++) {
    echo "<tr>";
    echo "<td>$table x $i =</td>";
    echo "<td>" . ($table * $i) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
