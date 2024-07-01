<?php
class Solution
{

    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    function searchMatrix($matrix, $target)
    {
        $rowCount = count($matrix);
        $colCount = count($matrix[0]);
        $lowRow = 0;
        $highRow = $rowCount - 1;

        while ($lowRow <= $highRow) {
            $midRow = floor(($lowRow + $highRow) / 2);
            if ($matrix[$midRow][0] <= $target and $target <= $matrix[$midRow][$colCount - 1]) {
                return $this->searchArray($matrix[$midRow], $target);
            } elseif ($target > $matrix[$midRow][$colCount - 1]) {
                $lowRow = $midRow + 1;
            } else {
                $highRow = $midRow - 1;
            }
        }

        return false;
    }
    function searchArray($nums, $target)
    {
        $numsLength = count($nums);
        $low = 0;
        $high = $numsLength - 1;

        while ($high >= $low) {
            $mid = floor(($high + $low) / 2);

            if ($nums[$mid] == $target) {
                return true;
            } elseif ($target > $nums[$mid]) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }
        return false;
    }
}
