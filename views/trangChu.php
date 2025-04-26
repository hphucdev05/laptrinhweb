<?php

require_once __DIR__ . '/../layout/header.php'; 

?>
<!DOCTYPE html>
<html lang="vi">

</html>

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
    <link rel="icon" type="image/png" sizes="192x192"
        href="<?php echo BASE_URL; ?>/public/favicon/android-icon-192x192.png">
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

    <title>Trang chủ bán vé cosplay</title>
</head>

<body>
    
    <div class="figure">
        <img src="<?php echo BASE_URL; ?>/public/images/new-banner-2-2-web-1.jpg" alt="Hình nền" class="figure--image">
        <div class="section">
            <div class="section--content">
                <button class="mua--ve vanban" onclick="window.location.href='<?php echo BASE_URL; ?>/index.php?page=muaVe.php'">MUA VÉ NGAY</button>
                <div class="section--contents">
                    <h1 class="section--content--title vanban">Ngày: <span>2-3</span>-11-2024</h1>
                    <p class="section--content--text vanban">Địa điểm: SKY EXPO . QUẬN 12 . HCM</p>
                </div>
            </div>
        </div>
    </div>
    <main class="noidung">
        <p class="vip vanban">KHÁCH MỜI VIP</p>
        <div class="thong-tin">
            <div class="ThongTin--contents1">
                <img src="<?php echo BASE_URL; ?>/public/images/DOKIBIRD.jpg" alt="Hình ảnh khách mời"
                    class="thong-tin--content--image">
                <div class="thong-tin--content">
                    <span class="vip-badge">VIP GUEST</span>
                    <h2>DOKIBIRD</h2>
                    <p>🐤 Hãy ghé thăm Booth Check-in của Dokibird để nhận thêm quà tặng, đồng thời sẵn sàng xem chương
                        trình đặc biệt Dokibird cùng các rồng nhé!</h2>
                    <p> Hobby đã hợp tác với họa sĩ Việt Nam ijacray82 và Dokibird để mang đến cho bạn những Merchandise
                        giới hạn không thể tìm thấy ở đâu khác ngoài việc sở hữu chúng tại event 2-3/11 lần này!😱🔥</p>
                    <p> Thông tin sắp tới về các tính năng từ Hobby Horizon và Dokibird sẽ được công bố trong tương lai,
                        vì vậy đừng bỏ lỡ—hãy theo dõi chúng tôi ngay bây giờ! 🏆</p>
                </div>
            </div>
            <div class="ThongTin--contents2">
                <div class="thong-tin--content">
                    <span class="vip-badge">VIP GUEST</span>
                    <h2>REMIND</h2>
                    <p>Này, It's Remind trên mic đây! ✌🏻🎤</p>
                    <p> Nâng ly lên nào vì chủ nhân của những ca khúc "Bạn không cô đơn" và "Ném ly" đang trên đường đến
                        Hobby Horizon! 🤩</p>
                    <p> 🗓️ Tháng 9 này, nữ ca sĩ đầy cuốn hút đến từ CKG sẽ tổ chức concert đầu tiên trong sự nghiệp!
                        Đoán xem liệu sẽ có mini concert để kể chuyện cười tại sự kiện tháng 11 không nhỉ? 🤯</p>
                    <p> Hãy đến Hobby Horizon để trải nghiệm tỉ lệ nghịch giữa những câu chuyện cười của Dì Mai và những
                        bài hát bắt trend của cô ấy! Go go brrrrr 🚨🛵</p>
                </div>
                <img src="<?php echo BASE_URL; ?>/public/images/REMIND.jpg" alt="Hình ảnh khách mời"
                    class="thong-tin--content--image">
            </div>
            <div class="ThongTin--contents3">
                <img src="<?php echo BASE_URL; ?>/public/images/CAN_THI_TG.jpg" alt="Hình ảnh khách mời"
                    class="thong-tin--content--image">
                <div class="thong-tin--content">
                    <span class="vip-badge">VIP GUEST</span>
                    <h2>𝘾𝘼𝙉 𝙏𝙃𝙄 𝙏𝙂</h2>
                    <p>⁉️ Tiết lộ những bí mật siêu sốc về Can Thi TG ⁉️</h2>
                    <p> Đầu tiên, chữ R trong tên của anh ta có nghĩa là Rich 🤨</p>
                    <p> Thứ hai, anh ta có thể vẽ bằng chân 🤯</p>
                    <p> Thứ ba, anh ta chỉ ra ngoài để chạm vào cỏ mỗi khi Hobby Horizon sắp ra mắt 🤩</p>
                    <p> Chuẩn bị snack đi, tay chơi của thủ đô sắp xuất hiện rồi 🛵🛵</p>
                </div>
            </div>
            <div class="ThongTin--contents4">
                <div class="thong-tin--content">
                    <span class="vip-badge">VIP GUEST</span>
                    <h2>𝙃𝙊𝙎𝙃𝙄 𝙋𝙃𝘼𝙉</h2>
                    <p>📢 Anh ấy đã trở lại! Hãy chào đón Chef Hoshi Phan quay lại Hobby Horizon vào tháng 11 này với
                        những hoạt động cực kỳ thú vị! 🎉</p>
                    <p> Hãy sẵn sàng thưởng thức màn trình diễn của anh ấy cùng các tài năng khác trên sân khấu chính,
                        với điểm nhấn là Cuộn Sushi Khổng Lồ—trải nghiệm hương vị tươi ngon ngay tại chỗ! ✨</p>
                    <p> ❤ Đặc biệt cảm ơn nhà tài trợ Kani Food đã hợp tác cùng Hoshi Phan để mang đến sự kiện ẩm thực
                        đặc sắc này tại Hobby Horizon!</p>
                    <p>Vẫn còn rất nhiều bất ngờ đang chờ bạn khám phá—hẹn gặp bạn tại sự kiện! 👋🏻</p>
                </div>
                <img src="<?php echo BASE_URL; ?>/public/images/HOSHI_PHAN.jpg" alt="Hình ảnh khách mời"
                    class="thong-tin--content--image">
            </div>
            <div class="ThongTin--contents5">
                <img src="<?php echo BASE_URL; ?>/public/images/KNITE.jpg" alt="Hình ảnh khách mời"
                    class="thong-tin--content--image">
                <div class="thong-tin--content">
                    <span class="vip-badge">VIP GUEST</span>
                    <h2>KNITE</h2>
                    <p>Cứ từ từ và để chúng tôi lo, không thể bỏ lỡ hai lần một năm được, đúng không? 🙂‍↔️</p>
                    <p> Không ngừng theo đuổi sự nghiệp cosplayer, "husbando" này đã thăng cấp lên CEO tại KT
                        Entertainment—hãy để họ trở thành CEO trong lòng bạn. Vị CEO này thích cà phê, yêu gấu mèo và
                        đặc biệt coi Việt Nam là ngôi nhà thứ hai của mình! 💪🏻😼</p>
                    <p> 🗓️ Tháng 9 này, nữ ca sĩ đầy cuốn hút đến từ CKG sẽ tổ chức concert đầu tiên trong sự nghiệp!
                        Đoán xem liệu sẽ có mini concert để kể chuyện cười tại sự kiện tháng 11 không nhỉ? 🤯</p>
                </div>
            </div>
        </div>
        <button class="mua--ve vanban" onclick="window.location.href='/views/muaVe.html'">MUA VÉ NGAY</button>
        <p class="vip vanban">COSPLAYER / YTUBER / GAMER</p>
        <div class="animation">
            <div class="animation-content">
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/cosplayer/Eipi-Coser-240x300.jpg"
                        alt="Eipi Coser">
                    <figcaption>Eipi Coser</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/cosplayer/Hikarin-240x300.jpg"
                        alt="Hikarin">
                    <figcaption>Hikarin</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/cosplayer/NANA娜-240x300.jpg" alt="NANA 娜">
                    <figcaption>NANA 娜</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/cosplayer/Rithe-240x300.jpg" alt="Rithe">
                    <figcaption>Rithe</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/cosplayer/Roxanne-Kho-240x300.jpg"
                        alt="Roxanne Kho">
                    <figcaption>Roxanne Kho</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/cosplayer/umekoj-240x300.jpg"
                        alt="Umekoj">
                    <figcaption>Umekoj</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/cosplayer/Zackt.-ザックト-240x300.jpg"
                        alt="Zackt. ザックト">
                    <figcaption>Zackt. ザックト</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/cosplayer/Zia-Einstein-240x300.jpg"
                        alt="Zia Einstein">
                    <figcaption>Zia Einstein</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/ckg/baohoang-240x300.jpg" alt="Bảo Hoàng">
                    <figcaption>Bảo Hoàng</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/ckg/DarlingVCR-240x300.jpg"
                        alt="DarlingVCR">
                    <figcaption>DarlingVCR</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/ckg/Desmond-Vu-240x300.jpg"
                        alt="Desmond Vũ">
                    <figcaption>Desmond Vũ</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/ckg/HK15-240x300.jpg" alt="HK15">
                    <figcaption>HK15</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/ckg/Longaoden-240x300.jpg"
                        alt="Long Áo Đen">
                    <figcaption>Long Áo Đen</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/ckg/nguyndi-240x300.jpg" alt="Nguyndi">
                    <figcaption>Nguyndi</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/ckg/sangtran-240x300.jpg" alt="Sang Trần">
                    <figcaption>Sang Trần</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/ckg/Who-is-who-240x300.jpg"
                        alt="Who is Who">
                    <figcaption>Who is Who</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/vtube/Kaos-Pinku-240x300.jpg"
                        alt="Kaos Pinku">
                    <figcaption>Kaos Pinku</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/vtube/Nyan-Nyan-Miruku-Ch-240x300.jpg"
                        alt="Nyan Nyan Miruku Ch.">
                    <figcaption>Nyan Nyan Miruku Ch.</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/vtube/Suwaa.png-240x300.jpg" alt="Suwaa">
                    <figcaption>Suwaa</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/vtube/Tani-Kami-神の谷-240x300.jpg"
                        alt="Tani Kami (神の谷)">
                    <figcaption>Tani Kami (神の谷)</figcaption>
                </figure>

                <!-- Nhân đôi tạo vòng lặp -->
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/cosplayer/Eipi-Coser-240x300.jpg"
                        alt="Eipi Coser">
                    <figcaption>Eipi Coser</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/cosplayer/Hikarin-240x300.jpg"
                        alt="Hikarin">
                    <figcaption>Hikarin</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/cosplayer/NANA娜-240x300.jpg" alt="NANA 娜">
                    <figcaption>NANA 娜</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/cosplayer/Rithe-240x300.jpg" alt="Rithe">
                    <figcaption>Rithe</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/cosplayer/Roxanne-Kho-240x300.jpg"
                        alt="Roxanne Kho">
                    <figcaption>Roxanne Kho</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/cosplayer/umekoj-240x300.jpg"
                        alt="Umekoj">
                    <figcaption>Umekoj</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/cosplayer/Zackt.-ザックト-240x300.jpg"
                        alt="Zackt. ザックト">
                    <figcaption>Zackt. ザックト</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/cosplayer/Zia-Einstein-240x300.jpg"
                        alt="Zia Einstein">
                    <figcaption>Zia Einstein</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/ckg/baohoang-240x300.jpg" alt="Bảo Hoàng">
                    <figcaption>Bảo Hoàng</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/ckg/DarlingVCR-240x300.jpg"
                        alt="DarlingVCR">
                    <figcaption>DarlingVCR</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/ckg/Desmond-Vu-240x300.jpg"
                        alt="Desmond Vũ">
                    <figcaption>Desmond Vũ</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/ckg/HK15-240x300.jpg" alt="HK15">
                    <figcaption>HK15</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/ckg/Longaoden-240x300.jpg"
                        alt="Long Áo Đen">
                    <figcaption>Long Áo Đen</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/ckg/nguyndi-240x300.jpg" alt="Nguyndi">
                    <figcaption>Nguyndi</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/ckg/sangtran-240x300.jpg" alt="Sang Trần">
                    <figcaption>Sang Trần</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/ckg/Who-is-who-240x300.jpg"
                        alt="Who is Who">
                    <figcaption>Who is Who</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/vtube/Kaos-Pinku-240x300.jpg"
                        alt="Kaos Pinku">
                    <figcaption>Kaos Pinku</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/vtube/Nyan-Nyan-Miruku-Ch-240x300.jpg"
                        alt="Nyan Nyan Miruku Ch.">
                    <figcaption>Nyan Nyan Miruku Ch.</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/vtube/Suwaa.png-240x300.jpg" alt="Suwaa">
                    <figcaption>Suwaa</figcaption>
                </figure>
                <figure>
                    <img src="<?php echo BASE_URL; ?>/public/images/Khach moi/vtube/Tani-Kami-神の谷-240x300.jpg"
                        alt="Tani Kami (神の谷)">
                    <figcaption>Tani Kami (神の谷)</figcaption>
                </figure>

            </div>
        </div>

        <p class="vip vanban">ĐƠN VỊ TÀI TRỢ</p>
        <div class="grid">
            <div class="FPTPlay"><img src="<?php echo BASE_URL; ?>/public/images/nha tai tro/1708914022_P5N.png"
                    alt="logo FPTPlay"></div>
            <div class="AMACorporation"><img
                    src="<?php echo BASE_URL; ?>/public/images/nha tai tro/AMA-CORP-WHITE-LOGO.png"
                    alt="AMACorporation"></div>
            <div class="CaliforniaFitnessYoga"><img
                    src="<?php echo BASE_URL; ?>/public/images/nha tai tro/CFYC_Logo.png" alt="CaliforniaFitnessYoga">
            </div>
            <div class="Cocoon"><img src="<?php echo BASE_URL; ?>/public/images/nha tai tro/cocoon-logo-ib2.png"
                    alt="Cocoon"></div>
            <div class="DragonShield"><img
                    src="<?php echo BASE_URL; ?>/public/images/nha tai tro/Dragon-Shield-logo_big.png"
                    alt="DragonShield"></div>
            <div class="FPTTelecom"><img src="<?php echo BASE_URL; ?>/public/images/nha tai tro/FPT_Telecom_logo.png"
                    alt="FPTTelecom"></div>
            <div class="Gigabyte"><img
                    src="<?php echo BASE_URL; ?>/public/images/nha tai tro/gigabyte-vector-logo-1.png" alt="Gigabyte">
            </div>
            <div class="House"><img src="<?php echo BASE_URL; ?>/public/images/nha tai tro/House_Foods-Logo.wine_.png"
                    alt="House"></div>
            <div class="Huion"><img src="<?php echo BASE_URL; ?>/public/images/nha tai tro/Huion.png" alt="Huion"></div>
            <div class="Indomie"><img src="<?php echo BASE_URL; ?>/public/images/nha tai tro/Indomie_Logo.png"
                    alt="Indomie"></div>
            <div class="HBOGo"><img src="<?php echo BASE_URL; ?>/public/images/nha tai tro/logo@3x.png" alt="HBOGo">
            </div>
            <div class="Nanlite"><img src="<?php echo BASE_URL; ?>/public/images/nha tai tro/logo-nanlite-white-1.png"
                    alt="Nanlite"></div>
            <div class="Microsoft"><img
                    src="<?php echo BASE_URL; ?>/public/images/nha tai tro/Microsoft_logo_2012.svg.png" alt="Microsoft">
            </div>
            <div class="VNG"><img src="<?php echo BASE_URL; ?>/public/images/nha tai tro/VNG_Corp._logo.svg.png"
                    alt="VNG"></div>
        </div>
        <div class="danhsach">
            <div class="marquee">
                <div class="marquee-content">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/044A1250.jpg" alt="image 1">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/453725903_1006882754558581_8115355033405659274_n-1-836x1024.jpg"
                        alt="image 2">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/A06A1094.jpg" alt="image 3">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/DSC07989.jpg" alt="image 4">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/DSC08020.jpg" alt="image 5">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/DSC08063.jpg" alt="image 6">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/GL01.jpg" alt="image 7">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/GL02.jpg" alt="image 8">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/GL03.jpg" alt="image 9">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/GL04.jpg" alt="image 10">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/S3A7680.jpg" alt="image 11">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/S3A8818.jpg" alt="image 12">
                    <!-- Nhân đôi tạo vòng lặp -->
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/044A1250.jpg" alt="image 1">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/453725903_1006882754558581_8115355033405659274_n-1-836x1024.jpg"
                        alt="image 2">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/A06A1094.jpg" alt="image 3">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/DSC07989.jpg" alt="image 4">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/DSC08020.jpg" alt="image 5">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/DSC08063.jpg" alt="image 6">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/GL01.jpg" alt="image 7">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/GL02.jpg" alt="image 8">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/GL03.jpg" alt="image 9">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/GL04.jpg" alt="image 10">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/S3A7680.jpg" alt="image 11">
                    <img src="<?php echo BASE_URL; ?>/public/images/Su kien/S3A8818.jpg" alt="image 12">
                </div>
            </div>

        </div>
    </main>
    <footer class="footer">
        <div class="footer-content">
            <img src="<?php echo BASE_URL; ?>/public/icons/Ảnh đại diện.svg" alt="Logo">

            <div class="lienhe">
                <div class="mang-xa-hoi">
                    <a href="https://www.facebook.com/hobbyhorizonvn" target="_blank"><img
                            src="<?php echo BASE_URL; ?>/public/images/Icon/facebook-svgrepo-com.svg" alt="Facebook"
                            style="width:3.4rem;height:auto"></a>
                    <a href="https://www.instagram.com/hobbyhorizonvn/" target="_blank"><img
                            src="<?php echo BASE_URL; ?>/public/images/Icon/instagram-167-svgrepo-com.svg"
                            alt="Instagram" style="width:3.4rem;height:auto"></a>
                    <a href="https://www.youtube.com/channel/UC9J6J9ZQ1J1jJ6Z9Zv9J9JQ" target="_blank"><img
                            src="<?php echo BASE_URL; ?>/public/images/Icon/X.jpg" alt="Youtube"
                            style="width:3.4rem;height:auto"></a>
                </div>
                <p class="vanban">Mail: marketing@hobbyhorizon.vn</p>
                <p class="vanban">Trụ sở: 78 Đ. Huỳnh Văn Nghệ, Phường 12, Gò Vấp, Hồ Chí Minh</p>
            </div>
        </div>
    </footer>
    <script src="<?php echo BASE_URL; ?>/public/javascript/affect.js"></script>
</body>

</html>