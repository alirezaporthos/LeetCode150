<?php

class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $stack = [];
        $parantheses = [
            ')' => '(',
            '}' => '{',
            ']' => '['
        ];

        // O(n)
        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];

            if (
                $char === '(' or
                $char === '{' or
                $char === '['
            ) {
                $stack[] = $char;
            } else {
                if (end($stack) === $parantheses[$char]) {
                    array_pop($stack);
                } else {
                    return false;
                }
            }
        }

        return empty($stack);
    }
}
