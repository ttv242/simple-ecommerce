<?php

function home_index()
{
    $title_page = "Trang chủ";

    require_once _DIR_ROOT . '/app/views/Project/inc/header.php';
    require_once _DIR_ROOT . '/app/views/Project/pages/home.php';
    require_once _DIR_ROOT . '/app/views/Project/inc/footer.php';
}

function about()
{
    $title_page = "Giới thiệu";

    require_once _DIR_ROOT . '/app/views/Project/inc/header.php';
    require_once _DIR_ROOT . '/app/views/Project/pages/about.php';
    require_once _DIR_ROOT . '/app/views/Project/inc/footer.php';
}

function contact()
{
    $title_page = "Liên hệ";
    $getPostData = getPostData();

    if (isset($getPostData) && !empty($getPostData)) {
        // Xử lý submit từ form contact
        var_dump($getPostData);
    } 
    require_once _DIR_ROOT . '/app/views/Project/inc/header.php';
    require_once _DIR_ROOT . '/app/views/Project/pages/contact.php';
    require_once _DIR_ROOT . '/app/views/Project/inc/footer.php';
}

function auth_login()
{
    $title_page = "Đăng nhập";
    $getPostData = getPostData();
    
    // var_dump($_SESSION['user']);

    if (isset($getPostData) && !empty($getPostData)) {
        // Xử lý submit từ form login
        // var_dump($getPostData);
        $result = login($getPostData['name'], $getPostData['password']);
        if ($result === true) {
            $message = "Đăng nhập thành công";
            $role = checkRoleAndRedirect($_SESSION['user'][0]['role']);
            if ($role === true) {
                header('Location: ' . _WEB_ROOT . '/?page=dashboad');
            } else if  ($role === false) {
                header('Location: ' . _WEB_ROOT . '/?page=home');
            }
        } else {
            $message = "Tên đăng nhập hoặc mật khẩu không chính xác";
            header('Location: ' . _WEB_ROOT . '/?page=login');
        }
    } 

    require_once _DIR_ROOT . '/app/views/Project/inc/header.php';
    require_once _DIR_ROOT . '/app/views/Project/pages/auth/login.php';
    require_once _DIR_ROOT . '/app/views/Project/inc/footer.php';
}

?>