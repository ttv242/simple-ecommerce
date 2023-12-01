<?php

function home_index()
{
    require_once views . 'Project/inc/header.php';
    require_once views . 'Project/pages/home.php';
    require_once views . 'Project/inc/footer.php';
}

// Phương thức để xử lý trang giới thiệu
function about()
{
    require_once views . 'Project/inc/header.php';
    require_once views . 'Project/pages/about.php';
    require_once views . 'Project/inc/footer.php';
}

// Phương thức để xử lý trang liên hệ
function contact()
{

}

function auth_login()
{
    require_once views . 'Project/inc/header.php';
    require_once views . 'Project/pages/login.php';
    require_once views . 'Project/inc/footer.php';
}

?>