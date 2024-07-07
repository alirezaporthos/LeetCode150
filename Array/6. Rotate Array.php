<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k)
    {
        $length = count($nums);
        $k = $k % $length;

        for ($start = 0, $end = $length - 1; $start < $end; $start++, $end--) {
            [$nums[$start], $nums[$end]] = [$nums[$end], $nums[$start]];
        }

        for ($start = 0, $end = $k - 1; $start < $end; $start++, $end--) {
            [$nums[$start], $nums[$end]] = [$nums[$end], $nums[$start]];
        }

        for ($start = $k, $end = $length - 1; $start < $end; $start++, $end--) {
            [$nums[$start], $nums[$end]] = [$nums[$end], $nums[$start]];
        }

        // space complexity o(n)
        // $newArray = [];

        // for ($i = 0; $i < $length; $i++) {
        //     $newIndex = ($length - ($k - $i)) % $length;

        //     $newArray[$i] = $nums[$newIndex];
        // }
        // $nums = $newArray;
    }
}
