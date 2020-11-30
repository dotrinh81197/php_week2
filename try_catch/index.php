<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Bài tập] Hiển thị thông báo nếu người dùng nhập số bất hợp lệ</title>
</head>

<body>
    <form method="POST">
        <p>Nhập x :</p>
        <input type="number" name="x">
        <p>Nhập y :</p>
        <input type="number" name="y"> </br>
        <hr>
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = intval($_POST["x"]);
        $y = intval($_POST["y"]);
        try {
            if ($y == 0 && $x == 0 || $y == 0) {
                throw new Exception("Error exception : divide by 0");
            }
            echo "Tổng " . $x . " + " . $y . " = " . ($x + $y) . "<br>";
            echo "Tổng " . $x . " - " . $y . " = " . ($x - $y) . "<br>";
            echo "Tổng " . $x . " * " . $y . " = " . ($x * $y) . "<br>";
            echo "Tổng " . $x . " / " . $y . " = " . ($x / $y) . "<br>";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    } ?>
</body>

</html>