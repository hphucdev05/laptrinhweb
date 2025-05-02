<?php
if (session_status() === PHP_SESSION_NONE) session_start();

if (!defined('BASE_URL')) {
    define('BASE_URL', '/Web_TrenTruong_cursor/webdemo');
}

require_once(__DIR__ . '/config/database.php');
