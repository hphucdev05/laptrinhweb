<?php
require_once 'Controller.php';

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
            ];

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

            if (empty($data['username']) || empty($data['password'])) {
                echo "<script>alert('Vui lòng điền đầy đủ thông tin!'); window.history.back();</script>";
                return;
            }

            // Kiểm tra tài khoản mật khẩu trong model
            $user = $this->userModel->login($data['username'], $data['password']);

            if ($user) {
                // Lưu thông tin người dùng vào session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];

                // Sau khi đăng nhập thành công, chuyển hướng
                header('Location: ' . BASE_URL . '/index.php?page=taikhoan');
                exit;
            } else {
                echo "<script>alert('Sai tài khoản hoặc mật khẩu!'); window.history.back();</script>";
            }
        } else {
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
