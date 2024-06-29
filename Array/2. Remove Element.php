<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val)
    {
        $k = count($nums);
        $lastClearedIndex = $k - 1;
        for ($i = $k - 1; $i >= 0; $i--) {
            if ($nums[$i] === $val) {
                $nums[$i] = $nums[$lastClearedIndex];
                $nums[$lastClearedIndex] = -1;
                $lastClearedIndex = $lastClearedIndex - 1;

                $k--;
            }
        }
        return $k;
    }
}
