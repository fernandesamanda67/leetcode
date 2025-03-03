<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $arrSum = [];

        foreach($nums as $key => $value) {
            $complement = $target - $value;

            if(isset($arrSum[$complement])) {
                return [$key, $arrSum[$complement]];
            }

            $arrSum[$value] = $key;
        }
    }
}
