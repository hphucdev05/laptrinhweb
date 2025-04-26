<?php require_once __DIR__ . '/../layout/header.php'; 
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


    <title>FAQ</title>
</head>
<body>

    <main class ="noidung FQAMain">
        <h2 class="vip vanban">CÂU HỎI THƯỜNG GẶP</h2>
        <div class="cac-cau-hoi">
            <div class="cau-hoi">
                <h3 class="vanban">Tôi có thể mang con tôi đi cùng không?</h3>
                <p class="vanban">Trẻ em dưới 1 tuổi là miễn phí, nhưng phải đi cùng cha mẹ hoặc người giám hộ hợp pháp.</p>
            </div>
            <div class="cau-hoi">
                <h3 class="vanban">Tôi có thể đổi hoặc trả lại vé không?</h3>
                <p class="vanban">Mọi giao dịch mua hàng là cuối cùng. Chúng tôi không chấp nhận đổi hoặc trả lại vé sau khi đã bán trừ khi sự kiện bị hủy bỏ.</p>
            </div>
            <div class="cau-hoi">
                <h3 class="vanban">Tôi có thể nâng cấp vé của mình không?</h3>
                <p class="vanban">Bạn có thể nâng cấp vé của mình tùy thuộc vào tình trạng vé còn lại và chính sách của sự kiện. Vui lòng liên hệ với bộ phận hỗ trợ khách hàng của chúng tôi để biết thêm chi tiết.</p>
            </div>
            <div class="cau-hoi">
                <h3 class="vanban">Tôi có được ra vào nhiều lần không?</h3>
                <p class="vanban">Bạn có thể ra vào sự kiện nhiều lần trong ngày nếu bạn có vé hợp lệ. Tuy nhiên, bạn cần giữ lại vé của mình để được quét lại khi vào lại sự kiện.</p>
            </div>
            <div class="cau-hoi">
                <h3 class="vanban">Thời gian diễn ra sự kiện?</h3>
                <p class="vanban">Thời gian sự kiện diễn ra từ 9 giờ sáng đến 7 giờ tối.</p>
            </div>
            <div class="cau-hoi">
                <h3 class="vanban">Có bán vé tại sự kiện không?</h3>
                <p class="vanban">Để đảm bảo người tham gia có trải nghiệm tốt nhất, chúng tôi khuyến khích tất cả các giao dịch mua vé được thực hiện trực tuyến trước khi sự kiện diễn ra. Số lượng vé bán tại sự kiện sẽ hạn chế và không đảm bảo có sẵn.</p>
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