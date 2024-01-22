<?php
if (isset($_GET['btnGui'])) {
    $hoten = $_GET['hoten'];
    $ngaysinh = $_GET['ngaysinh'];

    echo "Họ tên: $hoten<br>";
    echo "Ngày sinh: $ngaysinh";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        Họ tên:
        <input type="text" name="hoten" id="">
        <br>
        Ngày sinh:
        <input type="date" name="ngaysinh" id="">
        <br>
        <button type="submit" name="btnGui">Gửi</button>
    </form>
</body>

</html>