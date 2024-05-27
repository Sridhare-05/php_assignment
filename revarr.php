<?php
$arr = ["orange", "banana", "apple", "raspberry"];

$length = count($arr);

for ($i = 0; $i < $length / 2; $i++) {
    $temp = $arr[$i];
    $arr[$i] = $arr[$length - $i - 1];
    $arr[$length - $i - 1] = $temp;
}

echo '$arr = [';
foreach ($arr as $index => $value){
    if($index > 0) {
        echo ', ';
    }
    echo $value;
}
echo ']';
?>

