<?php

$nums = [-1,0,3,5,9,12];
$target = 9;

function search($nums, $target) {
    $left = 0;
    $right = count($nums) -1;
    
    while($left <= $right) {
        $mid =(int) (($left + $right) / 2);
        if($nums[$mid] == $target) {
            return $mid;
        }
        if($nums[$mid] < $target) {
            $left = $mid + 1;
        }
        if ($nums[$mid] > $target) {
            $right = $mid - 1;
        }
    }

    return -1;
}

echo search($nums, $target);