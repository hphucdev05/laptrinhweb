<?php
require_once __DIR__ . '/../index.php'
;require_once __DIR__ . '/../layout/header.php';  // Đảm bảo rằng bạn đã yêu cầu đúng file kết nối

if (isset($_SESSION['username'])) {
    // Người dùng đã đăng nhập
    echo "Chào, " . $_SESSION['username'];
} else {
    // Người dùng chưa đăng nhập
    echo "Chưa đăng nhập";
}

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo BASE_URL; ?>/public/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo BASE_URL; ?>/public/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo BASE_URL; ?>/public/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo BASE_URL; ?>/public/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo BASE_URL; ?>/public/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo BASE_URL; ?>/public/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo BASE_URL; ?>/public/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo BASE_URL; ?>/public/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL; ?>/public/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo BASE_URL; ?>/public/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL; ?>/public/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo BASE_URL; ?>/public/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL; ?>/public/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo BASE_URL; ?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo BASE_URL; ?>/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Áp dụng font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300..700&display=swap" rel="stylesheet">

    <!-- Áp dụng CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/reset.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/style.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/taikhoan.css" />

    <title>Thông tin sự kiện</title>
</head>

<body>

    <div class="content" id="content"></div>

    <div class="footer">
        <div class="footer-content">
            <img src="<?php echo BASE_URL; ?>/public/icons/Ảnh đại diện.svg" alt="Logo" style="user-select: none;">
            <div class="lienhe">
                <div class="mang-xa-hoi" style="user-select: none;">
                    <a href="https://www.facebook.com/hobbyhorizonvn" target="_blank"><img src="<?php echo BASE_URL; ?>/public/images/Icon/facebook-svgrepo-com.svg" alt="Facebook" style="width:3.4rem;height:auto"></a>
                    <a href="https://www.instagram.com/hobbyhorizonvn/" target="_blank"><img src="<?php echo BASE_URL; ?>/public/images/Icon/instagram-167-svgrepo-com.svg" alt="Instagram" style="width:3.4rem;height:auto"></a>
                    <a href="https://www.youtube.com/channel/UC9J6J9ZQ1J1jJ6Z9Zv9J9JQ" target="_blank"><img src="<?php echo BASE_URL; ?>/public/images/Icon/X.jpg" alt="Youtube" style="width:3.4rem;height:auto"></a>
                </div>
                <p class="vanban">Mail: marketing@hobbyhorizon.vn</p>
                <p class="vanban">Trụ sở: 78 Đ. Huỳnh Văn Nghệ, Phường 12, Gò Vấp, Hồ Chí Minh</p>
            </div>
        </div>
    </div>

    <script src="<?php echo BASE_URL; ?>/public/javascript/tai_khoan.js"></script>
</body>

</html>
