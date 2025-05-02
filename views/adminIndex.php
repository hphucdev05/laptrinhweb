<?php

$bootstrapPath = __DIR__ . '/../bootstrap.php';
echo "🔍 Đường dẫn bootstrap: $bootstrapPath<br>";

if (!file_exists($bootstrapPath)) {
    die("❌ Không tìm thấy bootstrap.php");
}

require_once($bootstrapPath);
echo "✅ bootstrap loaded<br>";


if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: ' . BASE_URL . '/views/dangNhap.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        a{
            text-decoration: none;
            color:#000000;
            -webkit-user-select: none;
            user-select: none;
        }
        body{
            color: #000000;
            background-color: #E9E9E9;
            font-family: Inter;
            font-size: 24px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }

        #admin--panel {
            padding: 22px;
            background-color: #7FDBFF;
            text-align: center;
            font-size: clamp(16px, 40px);;
            font-weight: 700;
            user-select: none;
        }


        .admin--menu-detail .theloai{
            color:white;
        }

        .admin--menu-detail .menu-detail a{
            display:block;
            padding:5px 5px 5px 15px;
            font-size: 16px;
            color: white;
        }
        .admin--menu-detail .menu-detail a:hover{
            background-color: #79b5e9;
            color: white;
        }

        .admin--menu-detail .theloai{
            cursor: pointer;
            -webkit-user-select: none;
            user-select: none;
            margin-bottom: 10px;
        }

        .menu-detail--title::after{
            content: '';
            display: block;
            width: 80%;
            height: 2px;
            background-color: #ffffff;
            margin:20px 0 20px 0 ;
        }

    </style>
    <title>Trang ADMIN</title>
</head>
<body>
    <div class="admin" style="width:100%;height:100%">
        <div class="admin--menu" style="width: 20%;height:100% ; float:left;">
            <h2 id="admin--panel" >ADMIN PANEL</h2>
            <div class="admin--menu-detail" style="background-color:#000;width:100%;height:100%;min-height:100vh">
                <div class="admin--menu-detail-content" style="margin-left:24px;padding-top:20px">
                <div class ="menu-detail--title">
                    <a data-url="<?php echo BASE_URL; ?>/views/tongquan.php" class="tongquan" style="cursor:pointer;color:white;-webkit-user-select: none;
    user-select: none;">Tổng quan</a>
                </div>
                <div class ="menu-detail--title">
                    <div class="theloai">Quản lý vé</div>
                    <div class="menu-detail">
                        <a data-url="<?php echo BASE_URL; ?>/views/quanlyveTao.php">Tạo giá vé</a>
                        <a data-url="<?php echo BASE_URL; ?>/views/quanlyve.php">Quản lý vé</a>
                        <a data-url="<?php echo BASE_URL; ?>/views/vedamua.php">Vé đã được mua</a>
                    </div>
                </div>
                <div class ="menu-detail--title">
                    <div class="theloai">Quản lý sự kiện</div>
                    <div class="menu-detail">
                        <a data-url="<?php echo BASE_URL; ?>/views/quanlysukien.php">Danh sách sự kiện</a>
                        <a data-url="<?php echo BASE_URL; ?>/views/themsukien.php">Thêm sự kiện</a>
                    </div>
                </div>
                <div class ="menu-detail--title">
                    <div class="theloai">Quản lý người dùng</div>
                    <div class="menu-detail">
                        <a data-url="<?php echo BASE_URL; ?>/views/taonguoidung.php">Thêm người dùng</a>
                        <a data-url="<?php echo BASE_URL; ?>/views/danhsachnguoidung.php">Danh sách người dùng</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div id="admin--content" style="width: 80%;height:100% ; float:right;"></div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
    $(".menu-detail").hide(500);

    // Load mặc định trang tổng quan
    loadAdminContent("<?php echo BASE_URL; ?>/views/tongquan.php");

    // Gắn sự kiện cho nút mở menu con
    $(".theloai").on("click", function () {
        $(".menu-detail").stop(true, true).slideUp(500);
        $(this).next(".menu-detail").stop(true, true).slideDown(500);
    });

    // Gắn sự kiện khi click vào các link
    $(".menu-detail a, .tongquan").on("click", function (e) {
        e.preventDefault();
        const url = $(this).data("url");
        loadAdminContent(url);
    });

    // Tự động ẩn menu khi click ngoài
    $(".admin--menu").on("click", function (e) {
        if (!$(e.target).closest(".menu-detail, .theloai").length) {
            $(".menu-detail").stop(true, true).slideUp(500);
        }
    });
});

// ✅ Tải nội dung + gắn lại hành vi sau mỗi lần load
function loadAdminContent(url) {
    $("#admin--content").load(url, function () {
        if (url.includes("tongquan")) {
            $.getScript("<?php echo BASE_URL; ?>/admin/javascript/drawChart.js", function () {
                if (typeof veBieuDo === "function") veBieuDo();
            });
        }
    });
}



    </script>
</body>
</html>