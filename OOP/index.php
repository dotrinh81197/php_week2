<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIẢI PHƯƠNG TRÌNH BẬC 2</title>
    <?php include 'xaydungQuadraticEquation.php' ?>
</head>

<body>
    <h3>Phương trình bậc 2 có dạng</h3>
    <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/23e70cfa003f402d108ec04d97983fb62f69536e" alt="">
    <form action="" method="post">
        <input type="number" name="a" placeholder=" Nhập a">
        <input type="number" name="b" placeholder=" Nhập b">
        <input type="number" name="c" placeholder=" Nhập c">
        <button type="Submit">TÌM NGHIỆM</button>
    </form>
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $pt1 = new QuadraticEquation($a, $b,  $c);

        if ($pt1->getDiscriminant() > 0) {
            echo "Nghiệm của pt là: " . $pt1->getRoot1() . " và " . $pt1->getRoot2();
            exit();
        }
        if ($pt1->getDiscriminant() == 0) {
            echo "Nghiệm của pt là: " . $pt1->getRoot1();
        } else {
            echo "Phương trình vô nghiệm";
        }
    } ?>
</body>

</html>