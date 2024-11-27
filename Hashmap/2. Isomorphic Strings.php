<?php

class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t)
    {
        $hash = [];
        $rHash = [];

        for ($i = 0; $i < strlen($s); $i++) {
            if (isset($hash[$t[$i]])) {
                if ($hash[$t[$i]] !== $s[$i]) {
                    return false;
                }
            }
            $hash[$t[$i]] = $s[$i];

            if (isset($rHash[$s[$i]])) {
                if ($rHash[$s[$i]] !== $t[$i]) {
                    return false;
                }
            }
            $rHash[$s[$i]] = $t[$i];
        }
        return true;
    }
}
