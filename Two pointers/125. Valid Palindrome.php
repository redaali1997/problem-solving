<?php

$s = "race a car";

function isPalindrome(string $s) {
    $arr = str_split(strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $s)));

    $left = 0;
    $right = count($arr) - 1;

    while($right > $left) {
        if($arr[$left] != $arr[$right]) {
            return false;
        }

        $right--;
        $left++;
    }

    return true;
}

print_r(isPalindrome($s));