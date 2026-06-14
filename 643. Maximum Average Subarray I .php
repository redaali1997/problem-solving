<?php

$nums = [2, 1, 5, 1, 3, 2];
$k = 3;

// brute force
function maxSum(array $nums, int $k) {
    $maxSum = 0;
    foreach($nums as $index => $num) {
        // index = 3, num = 1
        $sum = 0;
        if($k+$index >= count($nums)) {
            break;
        }
        for($i = $index; $i < $k+$index; $i++) {
            $sum += $nums[$i];
        }
        if($sum > $maxSum){
            $maxSum = $sum;
        }
    }

    return $maxSum;
}

echo maxSum($nums, $k);


// Sliding window
$nums = [1,12,-5,-6,50,3];
$k = 4;

function findMaxAverage(array $nums, int $k) {
    $sum = 0;
    for($i=0; $i < $k; $i++) {
        $sum += $nums[$i];
    }

    $maxSum = $sum;
    $maxWindow = $sum;
    for($i = $k; $i < count($nums); $i++) {
        $maxWindow = $maxWindow + $nums[$i] - $nums[$i-$k];
        if($maxWindow > $maxSum) {
            $maxSum = $maxWindow;
        }
    }

    return $maxSum / 4;
}

echo PHP_EOL . findMaxAverage($nums, $k);