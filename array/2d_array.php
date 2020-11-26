<?php
$array = [
    [1, 2, 3], [4, 5, 6], [7, 8, 9]
];
$sum = 0;
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < 3; $j++) {
        if ($i == $j) {
            $sum +=  $array[$i][$j]; // tổng các phần tử nằm trên đường chéo có tọa độ [i][i]
        }
    }
}
echo "<pre>";
print_r($array);
echo "</pre>";

echo "tổng các phần tử nằm trên đường chéo có tọa độ [i][i]: " . $sum;
