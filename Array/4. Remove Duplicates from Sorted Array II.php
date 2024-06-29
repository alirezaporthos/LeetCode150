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
