<?php

$s = "pwwkew";

function lengthOfLongestSubstring(string $s) {
    $text = str_split($s);
    $seen = [];
    $left = 0;
    $result = 0;
    
    for($right = 0; $right < count($text); $right++){
        $char = $text[$right];
        while(isset($seen[$char])){
            unset($seen[$text[$left]]);
            $left++;
        }

        $seen[$char] = true;
        $result = max($result, $right - $left + 1);
    }

    return $result;
}

echo lengthOfLongestSubstring($s);