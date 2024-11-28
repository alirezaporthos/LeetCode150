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
        while (true) {
            $numbers = $this->getNumbers($n);

            $sumSquare = 0;
            foreach ($numbers as $number) {
                $sumSquare += $number * $number;
            }

            if ($sumSquare == 1)
                return true;

            if ($hash[$sumSquare])
                return false;

            $hash[$sumSquare] = 1;
            $n = $sumSquare;
        }
    }
    function getNumbers($n)
    {
        $numbers = [];

        while ($n >= 10) {
            $numbers[] = $n % 10;
            $n = floor($n / 10);
        }
        $numbers[] = $n;

        return $numbers;
    }
}
