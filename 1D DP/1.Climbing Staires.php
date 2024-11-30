<?php
class Solution
{

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n)
    {
        $hash = [1 => 1, 2 => 2];

        if ($hash[$n]) {
            return $hash[$n];
        }

        for ($i = 3; $i <= $n; $i++) {
            $hash[$i] = $hash[$i - 1] + $hash[$i - 2];
        }

        return $hash[$n];
    }
}
