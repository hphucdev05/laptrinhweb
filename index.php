<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('BASE_URL', '/Web_TrenTruong_cursor/webdemo');
require_once(__DIR__ . '/config/database.php');

// Lấy page từ URL (mặc định là 'trangChu')
$page = $_GET['page'] ?? 'trangChu';
$method = $_SERVER['REQUEST_METHOD'];

// Những trang view load trực tiếp
$directViews = [
    'trangChu', 'muaVe', 'suKien', 'faq', 'dangKy', 'taikhoan',
    'adminIndex', 'tongquan', 'vedamua', 'quanlyveTao',
    'quanlyve', 'quanlysukien', 'themsukien',
    'danhsachnguoidung', 'taonguoidung'
];

// Những hành động sử dụng controller
$controllerActions = ['dangNhap', 'register', 'dangXuat'];

if (in_array($page, $directViews)) {
    $viewPath = __DIR__ . "/views/{$page}.php";
    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        http_response_code(404);
        require __DIR__ . '/views/404.php';
    }
} elseif (in_array($page, $controllerActions)) {
    require_once __DIR__ . '/controllers/UserController.php';
    $controller = new UserController();

    if ($page === 'dangNhap') $controller->login();
    elseif ($page === 'register') $controller->register();
    elseif ($page === 'dangXuat') $controller->logout();
} else {
    http_response_code(404);
    require __DIR__ . '/views/404.php';
}
