<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Số lần xuất hiện của kí tự trong chuỗi</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="string" placeholder="nhập 1 chuỗi kí tự">
        <input type="text" name="character" placeholder="Nhập 1 kí tự cần tìm ">
        <button type="submit">SEARCH</button>
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $str = $_POST['string'];
    $char = $_POST['character'];
    $array = str_split("$str");
    $count = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $char) {
            $count++;
        }
    }
    echo "<h4>kí tự $char lặp lại $count lần </h4>";
}
?>
<?php
