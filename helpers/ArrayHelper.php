<?php

function arrayFlatten($array)
{
    $result = [];
    foreach ($array as $item) {
        if (is_array($item)) {
            $result = array_merge($result, arrayFlatten($item));
        } else {
            $result[] = $item;
        }
    }
    return $result;
}

function arrayFilterEmpty($array)
{
    return array_filter($array, function ($value) {
        return $value !== '';
    });
}

function arraySortByKey($array, $key, $order = SORT_ASC)
{
    $sortColumn = [];
    foreach ($array as $k => $row) {
        $sortColumn[$k] = $row[$key];
    }

    array_multisort($sortColumn, $order, $array);

    return $array;
}

function arrayGroupBy($array, $key)
{
    $groupedArray = [];
    foreach ($array as $item) {
        $groupedArray[$item[$key]][] = $item;
    }
    return $groupedArray;
}

?>