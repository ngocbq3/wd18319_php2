<?php
//Kết nối đến CSDL
function connection()
{
    $host = "127.0.0.1"; //localhost
    $dbname = "we3014.01";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Lỗi kết nối CSDL: " . $e->getMessage();
    }
}
