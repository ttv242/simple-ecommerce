<?php

session_start();

require_once './app/controllers/Controller.php';
    // require_once './app/controllers/auth.php';
    // require_once './app/controllers/dashboard.php';

CONST views = './app/views/';

// Xác định trang hiện tại
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Kiểm tra xem người dùng đã đăng nhập hay chưa
$isLoggedIn = isset($_SESSION['isLoggedIn']) ? $_SESSION['isLoggedIn'] : false;

// Kiểm tra quyền truy cập
// $isAuthorized = isset($_SESSION['isAuthorized']) ? $_SESSION['isAuthorized'] : false;

// Điều hướng dựa trên trang hiện tại
switch ($page) {
    case 'home':
        home_index();
        break;
    case 'about':
        about();
        break;
    case 'login':
        auth_login();
        break;
    case 'register':
        auth_register();
        break;
    case 'dashboard':
        // Kiểm tra xem người dùng đã đăng nhập và có quyền truy cập hay không
        if ($isLoggedIn && $isAuthorized) {
            dashboard_index();
        } else {
            // Chuyển hướng đến trang đăng nhập nếu không đăng nhập hoặc không có quyền truy cập
            auth_login();
        }
        break;
    default:
        home_index();
        break;
}

?>
