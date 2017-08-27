<?php

/**
 * User: Nine
 * Date: 2017/8/25
 * Time: 上午9:58
 */

namespace algorithms\sort;

/**
 * Class Insert
 * @package algorithms\sort
 */
class Insert extends Base
{

    /**
     * 排序
     */
    public function sort()
    {
        $this->log("start");
        $start = microtime(true);
        for ($i = 1; $i < $this->_length; ++$i) {
            for ($j = $i; $j > 0 && $this->compare($j - 1, $j); --$j) {
                $this->exchange($j - 1, $j);
            }
        }
        $this->log('end it has spend ' . (microtime(true) - $start));
    }
}