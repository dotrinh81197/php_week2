<?php
function generateArray($size)
{
    $result = [];
    while (count($result) < $size) {
        $result[] = (rand(5, 100));
    }
    return $result;
}


function getMinValue($array)
{
    $min = $array[0];

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
    }
    return $min;
}
