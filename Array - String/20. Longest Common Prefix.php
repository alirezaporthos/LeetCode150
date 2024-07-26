<?php

class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        // O(m*n)
        $commonPrefix = $strs[0];

        foreach ($strs as $str) {
            $commonPrefixLength = strlen($commonPrefix);
            for ($i = $commonPrefixLength - 1; $i >= 0; $i--) {
                if ($commonPrefix[$i] !== $str[$i]) {
                    $commonPrefix = substr($commonPrefix, 0, $i);
                }
            }
        }
        return $commonPrefix;
    }
}
