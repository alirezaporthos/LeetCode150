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
        $newArray = [];

        for ($i = 0; $i < $length; $i++) {
            $newIndex = ($length - ($k - $i)) % $length;

            $newArray[$i] = $nums[$newIndex];
        }
        $nums = $newArray;
    }
}
