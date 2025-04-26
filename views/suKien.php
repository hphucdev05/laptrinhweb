<?php
require_once __DIR__ . '/../layout/header.php'; ?>
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
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo BASE_URL; ?>/public/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL; ?>/public/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo BASE_URL; ?>/public/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL; ?>/public/favicon/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        
        <!-- áp dụng font - family -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300..700&display=swap" rel="stylesheet">
        
        <!-- áp dụng css  -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/reset.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/style.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/taikhoan.css" />


    <title>Thông tin sự kiện</title>
</head>
<body>
    

    <main class ="noidung SuKienMain">
        <h2 class="vip vanban">SỰ KIỆN</h2>
        <div class="su-kien">
            <div class="su-kien-item">
                <div class="su-kien-date">
                    <span>T11, 2024</span>
                    <span class="date">2-3</span>
                    <span>Thứ Bảy, CN</span>
                </div>
                <div class="su-kien-content">
                    <h3>HOBBY HORIZON SS 2</h3>
                    <p>Không gian rộng lớn, sân chơi hoành tráng, cùng loạt hoạt động cực chất đang chờ bạn khám phá! Nhanh tay set lịch, lên đồ và đếm ngược thôi nào!🔥✨</p>
                    <div class="dia-diem">
                        <img class="icons" src="<?php echo BASE_URL; ?>/public/images/Icon (1)/map-pin-svgrepo-com.svg" alt="icon địa điểm">
                        <p><i class="fas fa-map-marker-alt"></i> Sky Expo - Tân Chánh Hiệp, Quận 12, Hồ Chí Minh</p>
                    </div>
                    <div class="thoi-gian">
                        <img class="icons" src="<?php echo BASE_URL; ?>/public/images/Icon (1)/calendar-days-svgrepo-com.svg" alt="icon thời gian">
                        <p><i class="fas fa-calendar-alt"></i> Thứ Bảy & Chủ nhật, Ngày 02-03 tháng 11 năm 2024</p>
                    </div>
                    <div class="su-kien-buttons">
                        <button class="dang-ky-ngay">Đăng ký ngay</button>
                        <button class="chi-tiet">Chi tiết</button>
                    </div>
                </div>
                <div class="su-kien-image">
                    <img src="<?php echo BASE_URL; ?>/public/images/background.jpeg" alt="HOBBY HORIZON SS 2">
                </div>
            </div>
            <hr class = "thanh-ngang">
            <div class="su-kien-item">
                <div class="su-kien-date">
                    <span>T03, 2023</span>
                    <span class="date">22-23</span>
                    <span>Thứ Bảy, CN</span>
                </div>
                <div class="su-kien-content">
                    <h3>HOBBY HORIZON SS 1</h3>
                    <p>Một chương trình đầy các hoạt động thú vị và mới lạ lần đầu tiên được tổ chức tại Hồ Chí Minh. Hứa hẹn mang lại các trải nghiệm khó quên dành cho các bạn có niềm đam mê yêu thích Cosplay & Game</p>
                    
                    <div class="dia-diem">
                        <img class="icons" src="<?php echo BASE_URL; ?>/public/images/Icon (1)/map-pin-svgrepo-com.svg" alt="icon địa điểm">
                        <p><i class="fas fa-map-marker-alt"></i> Sky Expo - Tân Chánh Hiệp, Quận 12, Hồ Chí Minh</p>
                    </div>
                    <div class="thoi-gian">
                        <img class="icons" src="<?php echo BASE_URL; ?>/public/images/Icon (1)/calendar-days-svgrepo-com.svg" alt="icon thời gian">
                        <p><i class="fas fa-calendar-alt"></i> Thứ Bảy & Chủ nhật, Ngày 22-23 tháng 03 năm 2023</p>
                    </div>
                    <div class="su-kien-buttons">
                        <button class="da-het-hang">Đã hết hàng</button>
                        <button class="chi-tiet">Chi tiết</button>
                    </div>
                </div>
                <div class="su-kien-image">
                    <img src="<?php echo BASE_URL; ?>/public/images/475773583_1136876094892579_872054405739590745_n.jpg" alt="HOBBY HORIZON SS 1">
                </div>
            </div>
        </div>
    </main>
    
    <div class="footer">
        <div class="footer-content">
            <img src="<?php echo BASE_URL; ?>/public/icons/Ảnh đại diện.svg" alt="Logo" style="user-select: none;">
                <div class="lienhe" >
                    <div class="mang-xa-hoi" style="user-select: none;">
                        <a href="https://www.facebook.com/hobbyhorizonvn" target="_blank"><img src="<?php echo BASE_URL; ?>/public/images/Icon/facebook-svgrepo-com.svg" alt="Facebook"  style ="width:3.4rem;height:auto"></a>
                        <a href="https://www.instagram.com/hobbyhorizonvn/" target="_blank"><img src="<?php echo BASE_URL; ?>/public/images/Icon/instagram-167-svgrepo-com.svg" alt="Instagram"  style ="width:3.4rem;height:auto"></a>
                        <a href="https://www.youtube.com/channel/UC9J6J9ZQ1J1jJ6Z9Zv9J9JQ" target="_blank"><img src="<?php echo BASE_URL; ?>/public/images/Icon/X.jpg" alt="Youtube" style ="width:3.4rem;height:auto"></a>
                    </div>
                    <p class="vanban">Mail: marketing@hobbyhorizon.vn</p>
                    <p class="vanban">Trụ sở: 78 Đ. Huỳnh Văn Nghệ, Phường 12, Gò Vấp, Hồ Chí Minh</p>
                </div>
        </div>
    </div>
    <script src="<?php echo BASE_URL; ?>/public/javascript/faq.js"></script>
</body>
</html>