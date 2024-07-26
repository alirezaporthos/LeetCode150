<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s)
    {
        $sWithoutSpacesAround = trim($s);
        $sWithoutSpacesAroundLength = strlen($sWithoutSpacesAround);

        for ($i = $sWithoutSpacesAroundLength - 1; $i >= 0; $i--) {
            if ($sWithoutSpacesAround[$i] == ' ') {
                return $sWithoutSpacesAroundLength - $i - 1;
            }
        }

        return $sWithoutSpacesAroundLength;

        //else
        //$length = 0;
        // for ($i = 0; $i < $sWithoutSpacesAroundLength; $i++) {
        //     if (!$sWithoutSpacesAround[$i] == ' ') {
        //         $length = 0;
        //     } else {
        //         $length++;
        //     }
        // }
        // return $length;
    }
}
