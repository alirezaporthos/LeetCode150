<?php

class Solution
{
    /**
     * @param Integer[] $prices
     * @return Integer
     */

    // profit is the growth of prices, look at it this way
    public function maxProfit(array $prices)
    {
        $totalProfit = 0;

        for ($i = 1; $i < count($prices); $i++) {

            if (($profit = $prices[$i] - $prices[$i - 1]) > 0) {
                $totalProfit += $profit;
            }
        }
        return $totalProfit;
    }
}
