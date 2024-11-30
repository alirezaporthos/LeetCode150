<?php
class Solution
{

    /**
     * @param Int[] $nums
     * @return String[]
     */
    function summaryRanges($nums)
    {

        if (empty($nums)) {
            return [];
        }

        $ranges = [];
        $start = $nums[0];

        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] + 1 !== $nums[$i + 1]) {
                if ($start == $nums[$i]) {
                    $ranges[] = "$start";
                } else {
                    $ranges[] = "$start->$nums[$i]";
                }
                $start = $nums[$i + 1];
            }
        }
        return $ranges;
    }
}
