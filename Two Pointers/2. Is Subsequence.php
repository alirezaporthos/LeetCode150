<?php
class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t)
    {
        $sIndex = 0;
        $sLength = strlen($s);
        if ($sLength == 0) {
            return true;
        }

        for ($i = 0; $i < strlen($t); $i++) {
            if ($t[$i] == $s[$sIndex]) {
                $sIndex++;
            }
            //early returns
            if ($sIndex > $sLength - 1) {
                return true;
            }
        }

        return false;
    }
}
