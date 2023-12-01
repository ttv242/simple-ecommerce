<?php

function truncateString($string, $maxLength)
{
    if (strlen($string) > $maxLength) {
        $truncatedString = substr($string, 0, $maxLength);
        $truncatedString .= '...';
        return $truncatedString;
    }

    return $string;
}

function capitalizeString($string)
{
    return ucfirst(strtolower($string));
}

function reverseString($string)
{
    return strrev($string);
}

function countWords($string)
{
    $words = str_word_count($string);
    return $words;
}

?>