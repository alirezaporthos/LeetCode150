<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $symbolValues = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];

        $finalInteger = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if (isset($symbolValues[$s[$i + 1]]) and $symbolValues[$s[$i]] < $symbolValues[$s[$i + 1]]) {
                $finalInteger += ($symbolValues[$s[$i + 1]] - $symbolValues[$s[$i]]);
                $i++;
            } else {
                $finalInteger += $symbolValues[$s[$i]];
            }
        }

        return $finalInteger;
    }
}
