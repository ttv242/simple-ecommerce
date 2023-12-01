<?php

function debounce($callback, $delay)
{
    $timerId = null;

    return function (...$args) use ($callback, $delay, &$timerId) {
        if ($timerId !== null) {
            clearTimeout($timerId);
        }

        $timerId = setTimeout(function () use ($callback, $args, &$timerId) {
            $callback(...$args);
            $timerId = null;
        }, $delay);
    };
}

function throttle($callback, $limit)
{
    $timerId = null;
    $lastExecTime = 0;

    return function (...$args) use ($callback, $limit, &$timerId, &$lastExecTime) {
        $now = microtime(true);
        $remainingTime = $lastExecTime + $limit - $now;

        if ($remainingTime <= 0) {
            if ($timerId !== null) {
                clearTimeout($timerId);
            }

            $callback(...$args);
            $lastExecTime = $now;
        } else {
            if ($timerId === null) {
                $timerId = setTimeout(function () use ($callback, $args, &$timerId, &$lastExecTime) {
                    $callback(...$args);
                    $timerId = null;
                    $lastExecTime = microtime(true);
                }, $remainingTime * 1000);
            }
        }
    };
}

?>