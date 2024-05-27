<?php
$cars1 = ['Mecedes Benz', 'Hilux', 'Highlander', 'Hummer', 'Limozien', 'Volvo'];
$cars2 = ['Tata', 'Hilux', 'Suzuki', 'Toyota', 'Hummer', 'Limozien', 'BMW'];

$cars = [];
foreach ($cars1 as $car) {
    $cars[] = $car;
}
foreach ($cars2 as $car) {
    if (!in_array($car, $cars)) {
        $cars[] = $car;
    }
}

echo '$cars = array(';
for ($i = 0; $i < count($cars); $i++) {
    if ($i > 0) {
        echo ', ';
    }
    echo $cars[$i];
}
echo ')';
?>
