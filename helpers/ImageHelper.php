<?php

function uploadImage($file, $targetDirectory)
{
    $targetFile = $targetDirectory . basename($file['name']);
    $uploadOk = true;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $check = getimagesize($file['tmp_name']);
    if (!$check) {
        echo "Tệp tin không phải là hình ảnh.";
        $uploadOk = false;
    }

    if (file_exists($targetFile)) {
        echo "Tệp tin đã tồn tại.";
        $uploadOk = false;
    }

    if ($file['size'] > 500000) {
        echo "Tệp tin quá lớn.";
        $uploadOk = false;
    }

    $allowedFormats = array('jpg', 'jpeg', 'png', 'gif');
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Chỉ cho phép tải lên các định dạng JPG, JPEG, PNG và GIF.";
        $uploadOk = false;
    }

    if ($uploadOk) {
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            return $targetFile;
        } else {
            echo "Lỗi khi tải lên tệp tin.";
        }
    }

    return false;
}

function deleteImage($filePath)
{
    if (file_exists($filePath)) {
        if (unlink($filePath)) {
            return true;
        } else {
            echo "Lỗi khi xóa hình ảnh.";
        }
    } else {
        echo "Tệp tin không tồn tại.";
    }

    return false;
}

function updateImage($file, $targetDirectory, $currentFilePath)
{
    // Xóa hình ảnh hiện tại
    if ($currentFilePath && file_exists($currentFilePath)) {
        if (!deleteImage($currentFilePath)) {
            return false;
        }
    }

    // Tải lên hình ảnh mới
    return uploadImage($file, $targetDirectory);
}

// Sử dụng helper functions

// $targetDirectory = "uploads/"; // Thư mục lưu trữ các hình ảnh tải lên

// // Thêm hình ảnh
// $uploadedFile = $_FILES['image'];
// $uploadedImagePath = uploadImage($uploadedFile, $targetDirectory);
// if ($uploadedImagePath) {
//     echo "Hình ảnh đã được tải lên thành công.";
// } else {
//     echo "Lỗi khi tải lên hình ảnh.";
// }

// // Xóa hình ảnh
// $imageToDelete = "uploads/image.jpg"; // Đường dẫn tới hình ảnh cần xóa
// $deleteResult = deleteImage($imageToDelete);
// if ($deleteResult) {
//     echo "Hình ảnh đã được xóa thành công.";
// } else {
//     echo "Lỗi khi xóa hình ảnh.";
// }

// // Sửa hình ảnh
// $uploadedFile = $_FILES['image'];
// $currentImagePath = "uploads/image.jpg"; // Đường dẫn tới hình ảnh hiện tại
// $updatedImagePath = updateImage($uploadedFile, $targetDirectory, $currentImagePath);
// if ($updatedImagePath) {
//     echo "Hình ảnh đã được cập nhật thành công.";
// } else {
//     echo "Lỗi khi cập nhật hình ảnh.";
// }

?>