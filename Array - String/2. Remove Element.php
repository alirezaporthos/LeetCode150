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
        $lastClearIndex = $k - 1;
        for ($i = $k - 1; $i >= 0; $i--) {
            if ($nums[$i] === $val) {
                $nums[$i] = $nums[$lastClearIndex];
                $nums[$lastClearIndex] = -1;
                $lastClearedIndex = $lastClearIndex - 1;

                $k--;
            }
        }
        return $k;
    }
}
