<?php

class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */

    //o(n) *
    function isValid($s)
    {
        $stack = [];
        $parantheses = [
            '(' => ')',
            '[' => ']',
            '{' => '}'
        ];

        for ($i = 0, $length = strlen($s); $i < $length; $i++) {
            if (array_key_exists($s[$i], $parantheses)) {
                $stack[] = $s[$i];
            } else {
                if (empty($stack) or $parantheses[end($stack)] !== $s[$i]) {
                    return false;
                }
                array_pop($stack);
            }
        }
        return empty($stack);

        // $parantheses = [
        //     ')' => '(',
        //     '}' => '{',
        //     ']' => '['
        // ];

        // // O(n)
        // for ($i = 0; $i < strlen($s); $i++) {
        //     $char = $s[$i];

        //     if (
        //         $char === '(' or
        //         $char === '{' or
        //         $char === '['
        //     ) {
        //         $stack[] = $char;
        //     } else {
        //         if (end($stack) === $parantheses[$char]) {
        //             array_pop($stack);
        //         } else {
        //             return false;
        //         }
        //     }
        // }

        // return empty($stack);
    }
}
