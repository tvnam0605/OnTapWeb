<!DOCTYPE html>
<html>
<head>
    <title>Chuyển số thành chữ</title>
</head>
<body>
    <h1>Chuyển số thành chữ</h1>
    <form method="post" action="">
        Nhập số: <input type="text" name="number">
        <input type="submit" value="Chuyển đổi">
    </form>

    <?php
function docSoRaChu($number) {
    $ones = array(
        1 => 'một',
        2 => 'hai',
        3 => 'ba',
        4 => 'bốn',
        5 => 'năm',
        6 => 'sáu',
        7 => 'bảy',
        8 => 'tám',
        9 => 'chín'
    );

    $tens = array(
        10 => 'mười',
        20 => 'hai mươi',
        30 => 'ba mươi',
        40 => 'bốn mươi',
        50 => 'năm mươi',
        60 => 'sáu mươi',
        70 => 'bảy mươi',
        80 => 'tám mươi',
        90 => 'chín mươi'
    );

    if ($number < 10) {
        return $ones[$number];
    } elseif ($number < 100) {
        if ($number % 10 == 0) {
            return $tens[$number];
        } else {
            return $tens[floor($number / 10) * 10] . ' ' . $ones[$number % 10];
        }
    } elseif ($number < 1000) {
        if ($number % 100 == 0) {
            return $ones[floor($number / 100)] . ' trăm';
        } else {
            return $ones[floor($number / 100)] . ' trăm ' . docSoRaChu($number % 100);
        }
    }
}

$number=[];
echo docSoRaChu($number);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = isset($_POST["number"]) ? intval($_POST["number"]) : 0;
        echo "Số bạn vừa nhập: " . $number . "<br>";
        echo "Chuyển thành chữ: " . docSoRaChu($number);
    }
    ?>
</body>
</html>
