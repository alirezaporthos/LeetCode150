<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums)
    {
        $energy = 0;
        $numsLength = count($nums);

        for ($i = 0; $i < $numsLength; $i++) {
            if ($nums[$i] > $energy) {
                $energy = $nums[$i];
            }

            if ($i < $numsLength)
                $energy--;

            if ($energy < 0)
                return false;
        }

        return true;

        // or 
        // $maxReachableIndex = $numsLength - 1;
        // for ($i = 0; $i <= $maxReachableIndex; $i++) {
        //     if ($i >= $maxReachableIndex || $nums[$i] == 0) {
        //         return false;
        //     }
        //     $maxReachableIndex = min($maxReachableIndex, $i + $nums[$i]);
        // }
        // return true;
    }
}
