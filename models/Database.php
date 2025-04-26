<?php
require_once 'config/database.php';

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    private $port = DB_PORT;
    private $conn;
    private $stmt;

    public function __construct() {
        $dsn = 'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname . ';charset=utf8';
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->conn = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            die("❌ Lỗi kết nối: " . $e->getMessage());
        }
    }
    public function getConnection() {
        return $this->conn;
    }
    // Chuẩn bị câu truy vấn
    public function query($query) {
        $this->stmt = $this->conn->prepare($query);
    }

    // Bind tham số
    public function bind($param, $value, $type = null) {
        if (is_null($type)) {
            switch(true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    // Thực thi câu truy vấn
    public function execute() {
        return $this->stmt->execute();
    }

    // Lấy nhiều dòng kết quả
    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy một dòng kết quả
    public function single() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Đếm số dòng
    public function rowCount() {
        return $this->stmt->rowCount();
    }
}
?>
