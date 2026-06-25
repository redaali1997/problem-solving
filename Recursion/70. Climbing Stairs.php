<?php

$n = 44;
$memo = [];

class Solution
{
    public function climbStairs($n, &$memo)
    {
        if ($n == 1) {
            return 1;
        }

        if ($n == 2) {
            return 2;
        }

        if(isset($memo[$n])) {
            return $memo[$n];
        }

        $memo[$n] = $this->climbStairs($n - 1, $memo) + $this->climbStairs($n - 2, $memo);

        return $memo[$n];
    }
}

echo (new Solution)->climbStairs($n, $memo);