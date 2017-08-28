<?php

/**
 * User: Nine
 * Date: 2017/8/27
 * Time: 下午4:58
 */

namespace algorithms\sort\merger;

/**
 * Class MergeFromTop
 * @package algorithms\sort\merger
 */
class MergeFromTop extends AbstractMerger
{
    /**
     *
     */
    public function sort()
    {
        $args = func_get_args();
        if (empty($args)) {
            $start = 0;
            $end = $this->_length - 1;
        } else {
            $start = $args[0];
            $end = $args[1];
        }

        if ($start >= $end) return;

        $middle = floor(($end + $start) / 2);

        self::sort($start, $middle);
        self::sort($middle + 1, $end);

        $this->merge($start, $middle, $end);
    }
}