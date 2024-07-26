<?php

class Solution
{

    /**
     * @param Integer[] $citations
     * @return Integer
     */
    function hIndex($citations)
    {
        // second answer o(nlog(n) + n)
        $articlesCount = count($citations);
        $hIndex = 0;

        //average case o(nlogn), least likely o(n^2)
        rsort($citations);
        for ($i = 0; $i < $articlesCount; $i++) {
            if ($hIndex > $citations[$i])
                $hIndex++;
            else
                break;
        }
        return $hIndex;
    }
}
