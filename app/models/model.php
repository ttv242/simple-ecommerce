<?php

require_once './config/database.php';



function createRow($table, $data)
{
    $columns = implode(', ', array_keys($data));
    $placeholders = rtrim(str_repeat('?, ', count($data)), ', ');
    $values = array_values($data);

    $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
    $result = execute($sql, $values);
    return $result;
}



function getAllRows($table)
{
    $sql = "SELECT * FROM $table";
    $rows = query($sql);
    return $rows;
}

function getRowById($table, $id)
{
    $sql = "SELECT * FROM $table WHERE id = ?";
    $params = [$id];
    $row = query($sql, $params);
    return $row;
}

function getRowByColumnName($table, $columnName, $value)
{
    $sql = "SELECT * FROM $table WHERE $columnName = ?";
    $params = [$value];
    $row = query($sql, $params);
    return $row;
}



function updateRowById($table, $id, $data)
{
    $columns = implode(' = ?, ', array_keys($data)) . ' = ?';
    $values = array_values($data);
    $values[] = $id;

    $sql = "UPDATE $table SET $columns WHERE id = ?";
    $result = execute($sql, $values);
    return $result;
}

function updateRowByColumnName($table, $columnName, $columnValue, $data)
{
    $setStatements = [];
    $values = [];

    foreach ($data as $key => $value) {
        $setStatements[] = "$key = ?";
        $values[] = $value;
    }

    $setStatements = implode(', ', $setStatements);
    $values[] = $columnValue;

    $sql = "UPDATE $table SET $setStatements WHERE $columnName = ?";
    $result = execute($sql, $values);
    return $result;
}



function deleteRowById($table, $id)
{
    $sql = "DELETE FROM $table WHERE id = ?";
    $params = [$id];
    $result = execute($sql, $params);
    return $result;
}

function deleteRowByColumnName($table, $columnName, $columnValue)
{
    $sql = "DELETE FROM $table WHERE $columnName = ?";
    $params = [$columnValue];
    $result = execute($sql, $params);
    return $result;
}

?>