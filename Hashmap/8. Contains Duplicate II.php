<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k)
    {
        $hash = [];

        for ($i = 0; $i < count($nums); $i++) {
            $num = $nums[$i];

            if (isset($hash[$num]) and (abs($hash[$num] - $i) <= $k)) {
                return true;
            }
            $hash[$num] = $i;
        }

        return false;
    }
}
