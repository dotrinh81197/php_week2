<?php
$array_2D = [
    '1' => [1, 20, 3, 4, 5],
    '2' => [6, 7, 8, 9, 10],
    '3' => [11, 12, 14, 13, 15]
];
$max = $array_2D['1'][0];
foreach ($array_2D as $key => $value) {
    foreach ($value as $key => $num) {
        if ($num > $max) {
            $max = $num;
        }
    }
}
echo "<pre>";
print_r($array_2D);
echo "</pre>";

echo "Giá trị lớn nhất của mảng là: $max";
