<?php

/**
 * Quy tắc đặt tên namespace
 * Đặt tên theo thư mục, đặt theo chuẩn pascal case (ký tự đầu của từ viết hoa)
 * mỗi thu mục cách bởi dấu \
 */

namespace App\Models;

use PDO;

/**
 * quy tắc đặt tên class
 * Đặt theo tên file
 */
class BaseModel
{
    protected $conn;
    protected $sqlBuilder;
    protected $tableName;
    protected $primaryKey = 'id';
    public function __construct()
    {
        $host = HOSTNAME;
        $dbname = DBNAME;
        $username = USERNAME;
        $password = PASSWORD;

        try {
            $this->conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Lỗi kết nối dữ liệu: " . $e->getMessage();
        }
    }

    //function all dùng để lấy toàn bộ dữ liệu
    public static function all()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName";
        $stmt  = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    //method find lấy dữ liệu theo id
    public static function find($id)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE $model->primaryKey=:$model->primaryKey";
        $stmt  = $model->conn->prepare($model->sqlBuilder);
        $data = ["$model->primaryKey" => $id];
        $stmt->execute($data);
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        //Trong trường hợp có dữ liệu
        if ($result) {
            return $result[0];
        }
        return $result;
    }

    /**
     * method where: tìm dữ liệu theo điều kiện
     * @column: Tên cột
     * @codition: điều kiện >, <, >=, ..
     * @value: giá trị cho điều kiện
     */
    public static function where($column, $codition, $value)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE `$column` $codition '$value' ";
        return $model;
    }
    //method andWhere: để nối tiến với câu lênh sqlBuilder trong method where
    public function andWhere($column, $codition, $value)
    {
        $this->sqlBuilder .= " AND `$column` $codition '$value' ";
        return $this;
    }
    //method orWhere: để nối tiến với câu lênh sqlBuilder trong method where
    public function orWhere($column, $codition, $value)
    {
        $this->sqlBuilder .= " OR `$column` $codition '$value' ";
        return $this;
    }
    //method get: dùng để thực thi câu lệnh sqlBuilder
    public function get()
    {
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}
