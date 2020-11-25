<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'function.php';
    ?>
</head>

<body>
    <h2>Tạo mảng có 5 phần tử</h2>
    <?php
    $size = 5;
    $array = generateArray($size);
    foreach ($array as $key => $value) {
        echo $value . "</br>";
    }
    echo "Giá trị nhỏ nhât của mảng là :" . getMinValue($array);
    ?>

</body>

</html>