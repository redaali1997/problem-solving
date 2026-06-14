<?php
// two pointers pattern

$arr = [1, 2, 3, 4, 5];
// $arr = [1, 2, 3, 4];
$s = ["h","e","l","l","o"];

function reverseInPlace(&$s) {
    $left = 0;
    $right = count($s) - 1;

    while($left < $right) {
        [$s[$left], $s[$right]] = [$s[$right], $s[$left]];
        $left++;
        $right--;
    }

    return $s;
}

print_r(reverseInPlace($s));