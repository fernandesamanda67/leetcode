<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $words = explode(" ", $s);

        $reversed = [];
        foreach ($words as $word) {
            $left = 0;
            $right = strlen($word) -1;
            $wordArr = str_split($word);
            
            while ($left < $right) {
                $temp = $wordArr[$left];
                $wordArr[$left] = $wordArr[$right];
                $wordArr[$right] = $temp;
                $left++;
                $right--;
            }          
            $reversed[] = implode("", $wordArr);
        }           
        return implode(" ", $reversed);
    }
}
