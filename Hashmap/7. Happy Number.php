<?php
class Solution
{

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n)
    {
        $hash = [];
        $sumSquare = $n;

        while (!$hash[$sumSquare]) {
            if ($sumSquare == 1)
                return true;

            $hash[$sumSquare] = 1;
            $sumSquare = $this->getSumSquare($sumSquare);
        }
        return false;
    }

    function getSumSquare($n)
    {
        $sumSquare = 0;
        while ($n >= 10) {
            $number = $n % 10;
            $sumSquare += $number * $number;

            $n = floor($n / 10);
        }

        $sumSquare += $n * $n;

        return $sumSquare;
    }
}
