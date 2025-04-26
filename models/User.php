<?php
require_once 'Model.php';

class User extends Model {
    private $table = 'users';

    // Đăng nhập
    // Trong hàm login
public function login($username, $password) {
    $this->db->query("SELECT * FROM {$this->table} WHERE username = :username");
    $this->db->bind(':username', $username);
    
    $row = $this->db->single();
    
    if ($row) {
        $hashed_password = $row['password'];
        echo "Mật khẩu đã mã hóa trong CSDL: " . $hashed_password . "<br>";
        echo "Mật khẩu đã nhập: " . $password . "<br>";
        
        if (password_verify($password, $hashed_password)) {
            return $row;
        }
    }
    
    return false;
}


    // Kiểm tra sự tồn tại của username
    public function findUserByUsername($username) {
        $this->db->query("SELECT * FROM {$this->table} WHERE username = :username");
        $this->db->bind(':username', $username);
        
        $row = $this->db->single();
        
        if ($this->db->rowCount() > 0) {
            return true;
        }
        
        return false;
    }

    // Kiểm tra sự tồn tại của email
    public function findUserByEmail($email) {
        $this->db->query("SELECT * FROM {$this->table} WHERE email = :email");
        $this->db->bind(':email', $email);
    
        $row = $this->db->single();
    
        if ($this->db->rowCount() > 0) {
            return true;
        }
    
        return false;
    }

    public function register($data) {
        $sql = "INSERT INTO {$this->table} (username, password, email, created_at)
                VALUES(:username, :password, :email, :created_at)";
        
        try {
            $stmt = $this->db->getConnection()->prepare($sql);
    
            $stmt->bindParam(':username', $data['username']);
            $stmt->bindParam(':password', $data['password']);  // ← Đã hash từ controller rồi!
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':created_at', date('Y-m-d H:i:s'));
    
            return $stmt->execute();
        } catch (PDOException $e) {
            die("❌ Lỗi SQL: " . $e->getMessage());
        }
    }
    
    
}
?>
