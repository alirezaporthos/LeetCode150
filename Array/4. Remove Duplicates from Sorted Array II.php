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

        for ($i = 0; $i < count($nums); $i++) {
            if (($nums[$i] !== $nums[$k]) or ($nums[$i] == $nums[$k] and $nums[$i] !== $nums[$k - 1])) {
                $nums[++$k] = $nums[$i];
            }
        }

        return $k + 1;
    }
}
