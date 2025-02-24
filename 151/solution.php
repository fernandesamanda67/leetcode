<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $cleanWordsArr = preg_split('/\s+/', trim($s));

        $left = 0;
        $right = count($cleanWordsArr) -1;

        while($left < $right) {
            [$cleanWordsArr[$left], $cleanWordsArr[$right]] = [$cleanWordsArr[$right], $cleanWordsArr[$left]];
            $left++;
            $right--;
        }

        return implode(" ", $cleanWordsArr);
    }
}
