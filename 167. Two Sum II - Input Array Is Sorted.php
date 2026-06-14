<?php

$numbers = [2,7,11,15];
$target = 9;

function twoSum(array $numbers, int $target) {
    $left = 0;
    $right = count($numbers)-1;

    while($right > $left) {
        $sum = $numbers[$left] + $numbers[$right];
        if($sum == $target) {
            return [$left+1, $right+1];
        }

        if($sum > $target) {
            $right--;
        } else {
            $left++;
        }
    }

    return null;
}

print_r(twoSum($numbers, $target));