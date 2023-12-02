<?php

function checkRoleAndRedirect($role)
{
    if ($_SESSION['user'][0]['role'] === 0) {
        // Nếu vai trò là 0, chuyển hướng về trang chủ
        // header('Location: ' . _WEB_ROOT . '/?page=home');
        return false;
        // exit;
    } elseif ($_SESSION['user'][0]['role'] === 1) {
        // Nếu vai trò là 1, chuyển hướng về trang dashboard
        // header('Location: dashboard.php');
        return true;
        // exit;
    } else {
        // Trường hợp khác, xử lý tùy ý hoặc chuyển hướng tới trang mặc định
        // Ví dụ: chuyển hướng về trang lỗi
        header('Location: error.php');
        // exit;
    }
}

?>