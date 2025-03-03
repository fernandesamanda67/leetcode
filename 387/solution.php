<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $arrString = str_split($s);
        $arrChar = [];

        foreach($arrString as $idx => $val) {
            if($arrChar[$val]) {
                $arrChar[$val][1] += 1;
            } else {
                $arrChar[$val] = [$idx, 1];
            }
        }

        foreach($arrChar as $value) {
            if($value[1] == 1) {
                return $value[0];
            }
        }

        return -1;    
    }
}
