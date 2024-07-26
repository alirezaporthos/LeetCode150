<?php


class Solution
{

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle)
    {

        //both correct 
        // time complexity O(n*m) 
        for ($i = 0; $i < strlen($haystack); $i++) {
            if ($needle[0] === $haystack[$i]) {
                $completeMatch = true;
                for ($j = 1; $j < strlen($needle); $j++) {
                    if ($needle[$j] !== $haystack[$i + $j]) {
                        $completeMatch = false;
                        break;
                    }
                }
                if ($completeMatch)
                    return $i;
            }
        }
        return -1;

        // $index = 0;
        // while ($index <= (strlen($haystack) - strlen($needle))) {
        //     for ($j = 0; $j < strlen($needle); $j++) {
        //         if ($needle[$j] !== $haystack[$j + $index]) {
        //             $index++;
        //             break;
        //         } elseif ($j === strlen($needle) - 1) {
        //             return $index;
        //         }
        //     }
        // }

        // return -1;
    }
}
