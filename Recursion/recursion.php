<?php

function factorial(int $n): int
{
    if ($n <= 1) {
        return 1;
    }

    return $n * factorial($n - 1);
}

// echo factorial(5);

function sumArray(array $arr)
{
    if (count($arr) == 0) {
        return 0;
    }

    return $arr[0] + sumArray(array_slice($arr, 1));
}

// echo PHP_EOL . sumArray([1, 2, 3, 4]);

// binary search

function binarySearch(array $arr, int $target, int $low = 0, ?int $high = null)
{
    if ($high === null) {
        $high = count($arr) - 1;   // أول نداء: الحد الأقصى آخر index
    }

    // Base case: مفيش مساحة بحث
    if ($low > $high) {
        return -1;
    }

    $mid = intdiv($low + $high, 2);

    if($arr[$mid] == $target) {
        return $mid;
    }
    if ($arr[$mid] > $target) {
        return binarySearch($arr, $target, $low, $mid - 1);
    }

    return binarySearch($arr, $target, $mid + 1, $high);
}

echo binarySearch([1,3,5,7], 1); // low = 0, high = 0, mid = 0
// echo binarySearch([1,7,10], 7);
