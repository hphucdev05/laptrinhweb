<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<style>
.dropdown {
  display: none;
  position: absolute;
  background-color: #111;
  padding: 10px;
  z-index: 1000;
  top: 100%;
  right: 0;
  border-radius: 6px;
  box-shadow: 0px 0px 10px #00000055;
  min-width: 150px;
}
.dropdown.show {
  display: block;
}
.dropdown a {
  display: block;
  padding: 8px 12px;
  color: white;
  text-decoration: none;
}
.dropdown a:hover {
  background-color: #333;
}
</style>

<header class="menu">
  <a href="<?php echo BASE_URL; ?>/index.php?page=trangChu">
    <img class="logo" src="<?php echo BASE_URL; ?>/public/images/logo.png" alt="Logo">
  </a>
  <nav>
    <ul class="menu--detail">
      <li><a class="vanban" href="<?php echo BASE_URL; ?>/index.php?page=muaVe">MUA VÉ</a></li>
      <li><a class="vanban" href="<?php echo BASE_URL; ?>/index.php?page=faq">FAQ</a></li>
      <li><a class="vanban" href="<?php echo BASE_URL; ?>/index.php?page=suKien">SỰ KIỆN</a></li>
      <li>
        <?php if (isset($_SESSION['username'])): ?>
          <nav class="nav" style="position: relative;">
            <a class="vanban" href="#" id="accountLink">TÀI KHOẢN</a>
            <div class="dropdown" id="dropdown">
              <a href="#" data-page="account">Tài khoản của tôi</a>
              <a href="#" data-page="tickets">Vé đã mua</a>
              <a href="<?php echo BASE_URL; ?>/index.php?page=dangXuat">Đăng xuất</a>
            </div>
          </nav>
        <?php else: ?>
          <a class="vanban" href="<?php echo BASE_URL; ?>/index.php?page=dangNhap">Đăng nhập/ </a>
          <a class="vanban" href="<?php echo BASE_URL; ?>/index.php?page=dangKy">Đăng ký</a>
        <?php endif; ?>
      </li>
    </ul>
  </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const accountLink = document.getElementById('accountLink');
  const dropdown = document.getElementById('dropdown');

  if (accountLink && dropdown) {
    accountLink.addEventListener('click', function (e) {
      e.preventDefault();
      dropdown.classList.toggle('show');
    });

    document.addEventListener('click', function (e) {
      if (!accountLink.contains(e.target) && !dropdown.contains(e.target)) {
        dropdown.classList.remove('show');
      }
    });
  }

  // Xử lý các sự kiện chuyển tab tài khoản
  document.querySelectorAll('[data-page]').forEach(item => {
    item.addEventListener('click', function (e) {
      e.preventDefault();
      const page = this.getAttribute('data-page');
      const BASE_URL = "<?php echo BASE_URL; ?>";
      window.location.href = `${BASE_URL}/index.php?page=taikhoan#${page}`;
    });
  });
});
</script>
