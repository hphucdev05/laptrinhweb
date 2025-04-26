<?php
session_start();  // Bắt đầu session để lưu trữ thông tin người dùng

define('BASE_URL', '/Web_TrenTruong_cursor/webdemo');  // Đảm bảo bạn đã khai báo đường dẫn đúng

// Load cấu hình DB
require_once 'config/database.php';

// Lấy route từ URL
$page = isset($_GET['page']) ? $_GET['page'] : 'trangChu';
$method = $_SERVER['REQUEST_METHOD'];

// Route điều hướng
switch ($page) {
    case '':
    case 'trangChu':
        require __DIR__ . '/views/trangChu.php';
        break;

    case 'muaVe':
        require __DIR__ . '/views/muaVe.php';
        break;

    case 'suKien':
        require __DIR__ . '/views/suKien.php';
        break;

    case 'faq':
        require __DIR__ . '/views/faq.php';
        break;

    case 'dangKy':
        require __DIR__ . '/views/dangKy.php';
        break;

    case 'dangNhap':
        require __DIR__ . '/controllers/UserController.php';
        $controller = new UserController();
        $controller->login();
        break;

    case 'register':
        require __DIR__ . '/controllers/UserController.php';
        $controller = new UserController();
        $controller->register();
        break;

    case 'taikhoan':
        require __DIR__ . '/views/taikhoan.php';
        break;

    case 'dangXuat':
        require __DIR__ . '/controllers/UserController.php';
        $controller = new UserController();
        $controller->logout();
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.html';
        break;
}
?>
