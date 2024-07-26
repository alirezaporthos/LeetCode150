<?php

class Solution
{

    /**
     * @param Integer[] $citations
     * @return Integer
     */
    function hIndex($citations)
    {
        // first answer
        $articlesCount = count($citations);
        $hIndex = $articlesCount;
        $errorChances = 0;
        $success = false;

        while (!$success) {
            $errorChances = $articlesCount - $hIndex;
            for ($i = 0; $i < $articlesCount; $i++) {
                if ($citations[$i] < $hIndex) {
                    $errorChances--;
                }
                if ($errorChances < 0) {
                    $hIndex--;
                    break;
                }
                if ($errorChances + 1 >= $articlesCount - $i) {
                    $success = true;
                    break;
                }
            }
        }
    }
}
