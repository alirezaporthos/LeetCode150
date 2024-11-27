<?php

class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t)
    {
        if (strlen($s) !== strlen($t))
            return false;

        $hash = [];

        // you can create the same hash map for the other string as well
        // and then only the counts 
        for ($i = 0; $i < strlen($s); $i++) {
            if ($hash[$s[$i]]) {
                $hash[$s[$i]] += 1;
            } else {
                $hash[$s[$i]] = 1;
            }
        }
        for ($i = 0; $i < strlen($t); $i++) {
            if ($hash[$t[$i]] and $hash[$t[$i]] >= 0) {
                $hash[$t[$i]] -= 1;
            } else {
                return false;
            }
        }
        return true;
    }
}
