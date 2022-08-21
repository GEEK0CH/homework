<?php

function calcEverything($args)
{
    $result = 0;
    $arg = $args[0];

    if ($arg == '+') {
        $result = $args[1];
        for ($i = 2; $i < sizeof($args); $i++) {
            $result += $args[$i];
        }
    } elseif ($arg == '-') {
        $result = $args[1];
        for ($i = 2; $i < sizeof($args); $i++) {
                $result -= $args[$i];
        }
    } elseif ($arg == '*') {
        $result = $args[1];
        for ($i = 2; $i < sizeof($args); $i++) {
            $result *= $args[$i];
        }
    } elseif ($arg == '/') {
        $result = $args[1];
        for ($i = 2; $i < sizeof($args); $i++) {
            $result /= $args[$i];
        }
    }
    return $result;
}

echo calcEverything(['+',2,2,3]);
