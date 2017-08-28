<?php

/**
 * User: Nine
 * Date: 2017/8/27
 * Time: 下午4:53
 */

namespace algorithms\sort\merger;

use algorithms\sort\Base;

/**
 * Class AbstractMerger
 * @package algorithms\sort\merger
 */
abstract class AbstractMerger extends Base
{
    /**
     * @param $start
     * @param $middle
     * @param $end
     */
    public function merge($start, $middle, $end)
    {
        $i = $start;
        $j = $middle + 1;

//        临时使用一个数组接收
        $tmp = $this->_shuffle;

        for ($k = $start; $k < $end + 1; ++$k) {
//            如果左边的使用完了
            if ($i > $middle) {
                $this->_shuffle[$k] = $tmp[$j++];
            } elseif ($j > $end) {
//                右边使用完了
                $this->_shuffle[$k] = $tmp[$i++];
            } elseif ($this->compare($tmp[$i], $tmp[$j])) {
//                二者大小
                $this->_shuffle[$k] = $tmp[$j++];
            } else {
                $this->_shuffle[$k] = $tmp[$i++];
            }
        }
    }

    /**
     * @param $first
     * @param $next
     * @return bool
     */
    public function compare($first, $next)
    {
        return $first > $next;
    }

}