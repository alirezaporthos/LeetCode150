<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target)
    {
        $numsLength = count($nums);
        $low = 0;
        $high = $numsLength - 1;

        while ($high >= $low) {
            $mid = floor(($high + $low) / 2);

            if ($nums[$mid] == $target) {
                return $mid;
            } elseif ($target > $nums[$mid]) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }
        return $low;
    }
}
