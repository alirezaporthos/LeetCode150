<?php

class Solution
{

    /**
     * @param Integer[] $gas
     * @param Integer[] $cost
     * @return Integer
     */
    function canCompleteCircuit($gas, $cost)
    {
        // the point is that if you're total has been positive and allowed you to reach the end of array
        // and considering there is an answer 
        // then no matter how many negatives you had before that index
        // you had to be able to make up for them in order to be an answer
        // if you have reached the end of the array and the tank is still full
        // then no matter how much nagative comes along the way
        // you would have enough tank to make up for them
        // since you know there is an answer
        // whatever came before that index didn't acummoadte to make the tank negative, if it would we wouldn't be able to reach the end
        if (array_sum($gas) < array_sum($cost)) {
            return -1;
        }

        $gasStationsCount = count($gas);
        $energy = 0;
        $startIndex = 0;

        for ($i = 0; $i < $gasStationsCount; $i++) {
            $energy = $gas[$i] - $cost[$i];

            if ($energy < 0) {
                $energy = 0;
                $startIndex = $i + 1;
            }
        }

        return $startIndex;
    }
}
