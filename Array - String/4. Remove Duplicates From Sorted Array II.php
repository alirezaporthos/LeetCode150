<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        $k = 0;

        //much better performance
        if (count($nums) < 2)
            return $k + 1;

        for ($i = 1; $i < count($nums); $i++) {
            if (($nums[$i] !== $nums[$k])) {
                $nums[++$k] = $nums[$i];
            } elseif ($nums[$k - 1] !== $nums[$i]) {
                $nums[++$k] = $nums[$i];
            }
        }

        return $k + 1;
    }
}
