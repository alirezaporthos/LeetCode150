<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */

    //Boyer-Moore Majority Vote Algorithm
    //If you would like to have the element who whas occured the most
    //You can comment $counts and any line that it is in

    function majorityElement($nums)
    {
        $count = 0;
        $candidate = null;
        $counts = [];
        $numsLength = count($nums);

        for ($i = 0; $i < count($nums); $i++) {
            if ($count === 0) {
                $candidate = $nums[$i];
            }
            $count += ($nums[$i] == $candidate) ? 1 : -1;
            $counts[$nums[$i]] = isset($counts[$nums[$i]]) ? $counts[$nums[$i]] + 1 : 1;
        }

        if ($counts[$candidate] >= ceil($numsLength / 2))
            return $candidate;
    }
}
