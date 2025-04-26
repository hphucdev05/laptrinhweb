<?php
require_once 'Database.php';

class Model {
    protected $db;
    
    public function __construct() {
        $this->db = new Database(); // Database.php xử lý kết nối và lỗi
    }
}
?>
