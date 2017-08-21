<?php

/**
 * User: Nine
 * Date: 2017/8/21
 * Time: 下午8:56
 */

namespace algorithms;

/**
 * Class Util
 * @package algorithms
 */
class Util
{
    /**
     * @param int $min
     * @param int $max
     * @param int $times
     * @param bool $uniqid
     * @return array
     */
    public static function makeRandArr($min = 0, $max = 100, $times = 100, $uniqid = true)
    {
        $returnArr = [];
        while ($times > 0) {
            $currRand = mt_rand($min, $max);
            if ($uniqid && in_array($currRand, $returnArr)) {
                continue;
            }
            array_push($returnArr, $currRand);
            --$times;
        }
        return $returnArr;
    }
}