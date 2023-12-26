<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Biểu thức chính quy để kiểm tra địa chỉ email hợp lệ
    $pattern = '/^[\w\.-]+@[\w\.-]+$/';

    if (preg_match($pattern, $email)) {
        echo "Địa chỉ email hợp lệ: " . $email;
    } else {
        echo "Địa chỉ email không hợp lệ!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kiểm tra địa chỉ email</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Nhập địa chỉ email: <input type="text" name="email">
        <input type="submit" value="Kiểm tra">
    </form>
</body>
</html>
