<?php
class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n)
    {
        $x = $m - 1;
        $y = $n - 1;
        $z = $m + $n - 1;

        while ($x >= 0 && $y >= 0) {
            if ($nums2[$y] >= $nums1[$x]) {
                $nums1[$z] = $nums2[$y];
                $y--;
            } else {
                $nums1[$z] = $nums1[$x];
                $x--;
            }
            $z--;
        }
        while ($y >= 0) {
            $nums1[$z] = $nums2[$y];
            $z--;
            $y--;
        }
    }
}
