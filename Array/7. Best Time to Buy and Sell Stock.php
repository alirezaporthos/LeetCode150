 <?php

    class Solution
    {

        /**
         * @param Integer[] $prices
         * @return Integer
         */

        // read it repeatedly

        function maxProfit($prices)
        {
            $min_value = $prices[0];
            $max_profit = 0;

            for ($i = 0; $i < count($prices); $i++) {
                if ($prices[$i] < $min_value) {
                    $min_value = $prices[$i];
                } elseif ($prices[$i] - $min_value > $max_profit) {
                    $max_profit = $prices[$i] - $min_value;
                }
            }
            return $max_profit;
        }
    }
