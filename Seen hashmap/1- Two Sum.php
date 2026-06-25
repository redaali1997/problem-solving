<?php
// complement pattern

$nums = [2, 7, 11, 15];
$target = 9;

function twoSum($nums, $target) {
    $seen = [];
    foreach($nums as $index => $num) {
        $complement = $target - $num;
        if(isset($seen[$complement])) {
            return [$seen[$complement], $index];
        }

        $seen[$num] = $index;
    }
    return null;
}

print_r(twoSum($nums, $target));