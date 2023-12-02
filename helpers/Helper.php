<?php

require_once './helpers/ArrayHelper.php';
require_once './helpers/AuthenticationHelper.php';
require_once './helpers/ErrorHelper.php';
require_once './helpers/FunctionHelper.php';
require_once './helpers/ImageHelper.php';
require_once './helpers/JsonHelper.php';
require_once './helpers/PostHelper.php';
require_once './helpers/SessionHelper.php';
require_once './helpers/StringHelper.php';

// Hàm CRUD chung
function createEntity($tableName, $data)
{
    // Triển khai logic tạo mới bản ghi trong bảng $tableName với dữ liệu $data
    // Trả về kết quả thành công hoặc thất bại
}

function readEntity($tableName)
{
    // Triển khai logic truy vấn và trả về tất cả bản ghi từ bảng $tableName
    // Trả về mảng chứa tất cả các bản ghi hoặc false nếu có lỗi
}

function updateEntity($tableName, $entityId, $data)
{
    // Triển khai logic cập nhật bản ghi có ID $entityId trong bảng $tableName với dữ liệu $data
    // Trả về kết quả thành công hoặc thất bại
}

function deleteEntity($tableName, $entityId)
{
    // Triển khai logic xóa bản ghi có ID $entityId trong bảng $tableName
    // Trả về kết quả thành công hoặc thất bại
}

?>