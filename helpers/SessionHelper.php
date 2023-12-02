<?php

// Viết thêm một số hàm get, updated, forgot session

function getSessionValue($key)
{
    if (isset($_SESSION[$key])) {
        return $_SESSION[$key];
    }
    return null;
}

// Hàm để kiểm tra xem người dùng đã đăng nhập hay chưa
function isLoggedIn()
{
    // Thực hiện logic kiểm tra xem người dùng đã đăng nhập hay chưa

    return true; // Trả về true nếu đã đăng nhập, ngược lại trả về false
}

// Hàm để lưu thông tin người dùng đã đăng nhập vào session
function login($username, $password)
{
    // Thực hiện logic để kiểm tra đăng nhập và lưu thông tin người dùng vào session
    $tableName = 'tbl_user';
    $columnName = 'user';
    $user = getRowByColumnName($tableName, $columnName , $username);
    
    // var_dump($user);

    if ($user && $user[0]['pass'] === $password) {
        // Đăng nhập thành công
        $_SESSION[$columnName] = $user;
        // var_dump($_SESSION['user'][0]['role']);
        return true;
    } else {
        // Đăng nhập thất bại
        return false;
    }
}

// Hàm để xử lý yêu cầu đăng xuất
function handleLogoutRequest()
{
    // Thực hiện xử lý yêu cầu đăng xuất

    echo 'Đăng xuất thành công!';
}

?>