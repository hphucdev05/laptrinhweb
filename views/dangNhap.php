<?php require_once __DIR__ . '/../index.php';

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
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/reset.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/logIn.css">

    <title>Đăng Nhập</title>
</head>

<body>

    <div id="wrapper">
        <form action="<?php echo BASE_URL; ?>/index.php?page=dangNhap" method="POST" id="form-login" style="height: 580px;">
            <div class="head">
                <h1 class="form-heading">Đăng Nhập</h1>
                <img src="<?php echo BASE_URL; ?>/public/icons/Ảnh đại diện.svg" alt="Ảnh đại diện">
            </div>
            <div class="form-login-detail">
                <div class="form-group dangky">
                    <label for="hovaten">Họ và tên</label>
                    <input type="text" id="hovaten" name="username" class="input-field" placeholder="Nhập họ và tên">
                </div>
                
                <div class="form-group dangky">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="password" name="password" class="input-field" placeholder="Nhập mật khẩu">
                </div>
                
                <button type="submit" class="btn">Đăng nhập</button>
                <p class="quen-mat-khau vanban"><a href="<?php echo BASE_URL; ?>/views/quenMKEmail.php">Quên mật khẩu</a></p>
                <div class="dang-ky vanban">
                    <span>Bạn chưa có tài khoản?</span>
                    <br>
                    <a href="<?php echo BASE_URL; ?>/index.php?page=dangKy">Đăng ký</a>
                </div>
                <p class="chinh-sach vanban"><a href="https://ticketbox.vn/customer-terms-of-use" class="dieu-khoan"
                        target="_blank">Điều khoản sử dụng</a> và <a
                        href="https://ticketbox.vn/information-privacy-policy" class="bao-mat" target="_blank">Chính
                        sách bảo mật thông tin cá nhân</a></p>
            </div>
        </form>
    </div>
</body>

</html>
