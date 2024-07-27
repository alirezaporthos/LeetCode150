<?php

class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s)
    {
        $s = trim($s);
        $length = strlen($s);
        $newS = '';
        $newWord = false;
        $count = 0;
        //O(n), you could use elpode and implode and ...

        for ($i = $length - 1; $i >= 0; $i--) {
            if ($s[$i] == ' ') {
                if ($newWord) {
                    $newS .= ($newS ? ' ' : '') . substr($s, $i + 1, $count);
                    $newWord = false;
                    $count = 0;
                }
            } else {
                $count++;
                $newWord = true;
            }
        }
        if ($newWord) {
            $newS .= ($newS ? ' ' : '') . substr($s, $i + 1, $count);
        }

        return $newS;
    }
}
