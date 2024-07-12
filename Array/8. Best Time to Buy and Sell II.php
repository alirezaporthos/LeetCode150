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
        $lastElement = $prices[0];
        $totalProfit = 0;

        for ($i = 0; $i < count($prices); $i++) {
            // you can use prices[$i-1] as lastElement if you're concered about space complexity,
            // though that way you should check if it's set.
            if (($profit = $prices[$i] - $lastElement) > 0) {
                $totalProfit += $profit;
            }
            $lastElement = $prices[$i];
        }

        return $totalProfit;
    }
}
