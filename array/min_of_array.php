<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="number" name="size" placeholder="Nhập size của mảng">
        <button type="submit">TÌM GIÁ TRỊ NHỎ NHẤT</button>
    </form>
</body>
<?php main(); ?>

</html>

<?php

function main()
{

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $size = $_POST['size'];
    }
    if (!empty($size) && $size > 0) {
        $result_array =  generateArray($size);
        print_r($result_array);
        echo "</br> Vị trí index của phần tử có giá trị nhỏ nhất là :" . getMinValue($result_array);;
    } else {
        echo "Hãy nhập số phàn tử của mảng";
    }
}

?>

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
            $index = $i;
        }
    }
    return $index;
}
