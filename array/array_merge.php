<?php
$array1 = [];
$array2 = [];
for ($i = 0; $i <= 10; $i += 2) {
    $array1[] = $i;
}
print_r($array1);
echo "</br>";
for ($i = 1; $i <= 10; $i += 2) {
    $array2[] = $i;
}
print_r($array2);
echo "</br>";
// $array3 = array_merge($array1, $array2);
// print_r($array3);
$array3 = [];
$array1_length = count($array1);
$array2_length = count($array2);
$array3_length = $array1_length + $array2_length;

for ($j = 0; $j < $array1_length; $j++) {
    $array3[$j] = $array1[$j];
}
for ($i = $array1_length, $j = 0; $i < $array3_length, $j < $array2_length; $j++, $i++) {
    $array3[$i] = $array2[$j];
}

foreach ($array3 as $key => $value) {
    echo  $value . "</br>";
}
