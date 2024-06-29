<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        $array = [];
        $array[] = $nums[0];

        $k = 1;
        for ($i = 0; $i < count($nums) - 1; $i++) {
            if ($nums[$i] !== $nums[$i + 1]) {
                $array[] = $nums[$i + 1];
                $k++;
            }
        }
        $nums = $array;
        return $k;
    }
}
