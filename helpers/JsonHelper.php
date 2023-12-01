<?php

function encodeJson($data)
{
    return json_encode($data);
}

function decodeJson($json)
{
    return json_decode($json, true);
}

function saveJsonToFile($data, $filename)
{
    $json = encodeJson($data);
    if ($json === false) {
        echo "Lỗi khi mã hóa dữ liệu JSON.";
        return false;
    }

    if (file_put_contents($filename, $json) !== false) {
        return true;
    } else {
        echo "Lỗi khi lưu tệp JSON.";
        return false;
    }
}

function loadJsonFromFile($filename)
{
    $json = file_get_contents($filename);
    if ($json === false) {
        echo "Lỗi khi đọc tệp JSON.";
        return null;
    }

    $data = decodeJson($json);
    if ($data === null) {
        echo "Lỗi khi giải mã dữ liệu JSON.";
        return null;
    }

    return $data;
}

?>