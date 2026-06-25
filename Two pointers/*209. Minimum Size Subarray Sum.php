<?php

$target = 7;
$nums = [2,3,1,2,4,3];

function minSubArrayLen(int $target, array $nums) {
    $left = 0;
    $right = 0;
    $minLength = null;

    $sum = 0;
    while($right < count($nums)) {
        $sum += $nums[$right];
        
        while($sum >= $target) {
            $length = $right - $left + 1;
            if(is_null($minLength) || $minLength > $length) {
                $minLength = $length;
            }
            $sum -= $nums[$left];
            $left++;
        }

        $right++;
    }

    return $minLength ?? 0;
}

echo minSubArrayLen($target, $nums);