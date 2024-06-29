<?php
class Solution
{

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine)
    {

        $magazineCharsCount = [];

        foreach (str_split($magazine) as $char) {
            if (isset($magazineCharsCount[$char])) {
                $magazineCharsCount[$char]++;
            } else {
                $magazineCharsCount[$char] = 1;
            }
        }

        foreach (str_split($ransomNote) as $char) {
            if (isset($magazineCharsCount[$char]) && $magazineCharsCount[$char] > 0) {
                $magazineCharsCount[$char]--;
            } else {
                return false;
            }
        }

        return true;

        // second one, it's using early returns more, it doesn't work completely because 
        // php has associative arrays and if you delete an index wether it's number or ... other indexes won't change
        // $magazineArray = str_split($magazine);
        // foreach (str_split($ransomNote) as $ransomNoteChar) {
        //     $i = count($magazineArray);
        //     while ($i >= -1) {
        //         if ($i < 0) {
        //             return false;
        //         }

        //         if ($magazineArray[$i] == $ransomNoteChar) {
        //             unset($magazineArray[$i]);
        //             $i++;
        //         }
        //         $i--;
        //     }
        // }

        // if (count($magazineArray) > 0) {
        //     return false;
        // }

        // return true;
    }
}
