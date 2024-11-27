<?php
class Solution
{

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s)
    {
        $hash = [];
        $rhash = [];
        $words = explode(' ', $s);

        if (count($words) !== strlen($pattern))
            return false;


        for ($i = 0; $i < count($words); $i++) {
            $word = $words[$i];

            if (
                ($hash[$word] and ($hash[$word] !== $pattern[$i]))
                or
                ($rhash[$pattern[$i]] and ($rhash[$pattern[$i]] !== $word))
            ) {
                return false;
            }

            $rhash[$pattern[$i]] = $word;
            $hash[$word] = $pattern[$i];
        }


        return true;
    }
}
