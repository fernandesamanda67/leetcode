<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maximumLengthSubstring($s) {
        $left = 0;
        $right = 0;
        $max = 1;
        $counter = [];

        $counter[$s[0]] = 1;

        while ($right < strlen($s) - 1) {
            $right += 1;

            if($counter[$s[$right]]) {
                $counter[$s[$right]] += 1;
            } else {
                $counter[$s[$right]] = 1;
            }

            while ($counter[$s[$right]] == 3) {
                $counter[$s[$left]] -= 1;
                $left += 1;
            }
            
            $max = max($max, $right - $left + 1);
        }
        return $max;
    }
}
