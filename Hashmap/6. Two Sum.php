<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $hash = [];
        for ($i = 0; $i < count($nums); $i++) {
            $num = $nums[$i];
            if (isset($hash[$num]) and $hash[$num] !== $i) {
                return [$hash[$num], $i];
            }
            $hash[$target - $num] = $i;
        }
        // for ($i = 0; $i < count($nums); $i++) {
        //     $num = $nums[$i];
        //     if (isset($hash[$num]) and $hash[$num] !== $i) {
        //         return [$hash[$num], $i];
        //     }
        // }
    }
}
