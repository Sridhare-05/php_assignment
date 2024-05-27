<?php
$cars1 = array('Mecedes Benz', 'Hilux', 'Highlander', 'Hummer', 'Limozien', 'Volvo');
$cars2 = array('Tata', 'Hilux', 'Suzuki', 'Toyota', 'Hummer', 'Limozien', 'BMW');

$cars = array_unique(array_merge($cars1, $cars2));

echo '$cars = array(' . implode( ',', $cars) . ')';
?>
