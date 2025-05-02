<?php
require_once 'Controller.php';

// Đảm bảo đường dẫn đúng với file database.php
require_once(__DIR__ . '/../config/database.php'); // Quay lại thư mục gốc của dự án

class UserController extends Controller {
    private $userModel;

    public function __construct() {
        $this->userModel = $this->model('User');
    }

    // Đăng ký người dùng
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => $_POST['username'] ?? '',
                'email' => $_POST['email'] ?? '',
                'password' => $_POST['password'] ?? '',
                'confirm_password' => $_POST['confirm-password'] ?? '',
                'role' => 'user', // Mặc định là 'user'

            ];
            if ($data['username'] === 'admin2' && $data['password'] === 'admin2') {
                $data['role'] = 'admin'; // Gán role là admin cho tài khoản admin
            }
    
            // Kiểm tra mật khẩu xác nhận
            if ($data['password'] !== $data['confirm_password']) {
                echo "<script>alert('❌ Mật khẩu xác nhận không khớp!'); window.history.back();</script>";
                exit;
            }

            // Kiểm tra username đã tồn tại
            if ($this->userModel->findUserByUsername($data['username'])) {
                echo "<script>alert('⚠️ Tên đăng nhập đã tồn tại!'); window.history.back();</script>";
                exit;
            }

            // Kiểm tra email đã tồn tại
            if ($this->userModel->findUserByEmail($data['email'])) {
                echo "<script>alert('⚠️ Email đã tồn tại!'); window.history.back();</script>";
                exit;
            }

            // Mã hóa mật khẩu
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

            // Gọi model để lưu
            if ($this->userModel->register($data)) {
                echo "<script>alert('✅ Đăng ký thành công!'); window.location.href = '" . BASE_URL . "/index.php?page=dangNhap';</script>";
                exit;
            } else {
                echo "<script>alert('❌ Đăng ký thất bại!'); window.history.back();</script>";
                exit;
            }
        }

        $this->view('dangKy');
    }

    // Đăng nhập
    
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
            $data = [
                'username' => $_POST['username'] ?? '', 
                'password' => $_POST['password'] ?? '',
            ];
    
            // Kiểm tra nếu thông tin đăng nhập chưa đầy đủ
            if (empty($data['username']) || empty($data['password'])) {
                echo "<script>alert('Vui lòng điền đầy đủ thông tin!'); window.history.back();</script>";
                return;
            }
    
            // Kiểm tra tài khoản mật khẩu trong model cho user (người dùng thông thường)
            // Truyền cả 2 tham số: username và password
            $user = $this->userModel->login($data['username'], $data['password']);
    
            if ($user) {
                // Lưu thông tin người dùng vào session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['role'] = $user['role'];  // Lưu role vào session
    
                // Kiểm tra role của người dùng, nếu là admin thì chuyển hướng đến trang admin
                if ($_SESSION['role'] === 'admin') {
                    header('Location: ' . BASE_URL . '/views/adminIndex.php');
                    exit;
                } else {
                    // Nếu là user bình thường, chuyển hướng đến trang tài khoản người dùng
                    header('Location: ' . BASE_URL . '/index.php?page=taikhoan');
                    exit;
                }
            } else {
                // Nếu thông tin đăng nhập sai
                echo "<script>alert('Sai tài khoản hoặc mật khẩu!'); window.history.back();</script>";
            }
        } else {
            // Hiển thị trang đăng nhập khi yêu cầu không phải POST
            $this->view('dangNhap');
        }
    }
    
    
    
    
    
    

    
    
    
    
    

    
    

    
    

    
    
    
    
    
    

    
    
    
    

    
    

    
    
    
    
    
    

    
    
    
    
    
 
    
    
    
    
    
    
    

// Đăng xuất
    public function logout() {
        // Hủy tất cả session
        session_unset();
        
        // Hủy session
        session_destroy();

        // Chuyển hướng về trang chủ hoặc trang đăng nhập
        header('Location: ' . BASE_URL . '/index.php?page=trangChu');
        exit;
    }
}
?>
