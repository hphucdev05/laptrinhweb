<?php
var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $hovaten = $_POST["hovaten"] ?? '';
    $email = $_POST["Email"] ?? '';
    $password = $_POST["password"] ?? '';

    if (empty($hovaten) || empty($email) || empty($password)) {
        die("Vui lòng nhập đầy đủ thông tin!");
    }

    // Mã hóa mật khẩu (Bắt buộc để bảo mật)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Kết nối database (giả sử dùng MySQL)
    $conn = new mysqli("localhost", "root", "", "webdemo");

    if ($conn->connect_error) {
        die("Lỗi kết nối CSDL: " . $conn->connect_error);
    }

    // Chuẩn bị câu lệnh SQL tránh lỗi SQL Injection
    $stmt = $conn->prepare("INSERT INTO users (hovaten, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $hovaten, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "Đăng ký thành công!";
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    http_response_code(405);
    echo "Phương thức không được phép!";
}
?>
