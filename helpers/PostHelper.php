<?php

// Hàm để lấy dữ liệu POST từ người dùng
function getPostData()
{
    $postData = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($_POST as $key => $value) {
            $postData[$key] = $value;
        }
    }

    return $postData;
}

?>