<?php
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s)
    {
        $str = strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $s));
        $length = strlen($str);
        $j = $length - 1;

        if ($length == 1)
            return true;

        for ($i = 0; $i < $j; $i++) {
            if (substr($str, $i, 1) !== substr($str, $j--, 1)) {
                return false;
            }
        }
        return true;
    }
}
