<?php

function isValid(string $s): bool
{
    $stack = [];
    $pairs = [
        ')' => '(',
        ']' => '[',
        '}' => '{',
    ];

    foreach (str_split($s) as $char) {
        if ($char === '(' || $char === '{' || $char === '[') {
            array_push($stack, $char);
        } else {
            if(empty($stack)) {
                return false;
            }
            $lastChar = array_pop($stack);
            if($lastChar !== $pairs[$char]) {
                return false;
            }
        }
    }

    return empty($stack);
}

var_dump(isValid("([)]"));