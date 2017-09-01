<?php
/**
 * User: Nine
 * Date: 2017/9/1
 * Time: 下午10:30
 */

namespace algorithms\sort\quick;

use algorithms\sort\Base;

/**
 * Class ThreePart
 * @package algorithms\sort\quick
 */
class ThreePart extends Base
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
//        $point是比较的值
        $lt = $start;
        $point = $this->_shuffle[$start];
        $j = $start + 1;
        $gt = $end;
        while ($j <= $gt) {
            $res = $this->compareTo($point, $this->_shuffle[$j]);
            if ($res > 0) {
                $this->exchange($lt++, $j++);
            } elseif ($res < 0) {
                $this->exchange($j, $gt--);
            } else {
                $j++;
            }
        }
        self::sort($start, $lt - 1);
        self::sort($gt + 1, $end);
    }
}