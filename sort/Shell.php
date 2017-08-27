<?php
/**
 * User: Nine
 * Date: 2017/8/27
 * Time: 下午2:50
 */

namespace algorithms\sort;

/**
 * Class Shell
 * @package algorithms\sort
 */
class Shell extends Base
{
    public function sort()
    {
        $this->log("start");
        $start = microtime(true);
//        获取递增数列
        $h = 1;
        while ($h < $this->_length / 3) {
            $h = 3 * $h + 1;
        }

        while ($h >= 1) {
            for ($i = $h; $i < $this->_length; ++$i) {
                for ($j = $i; $j >= $h && $this->compare($j - $h, $j); $j -= $h) {
                    $this->exchange($j - $h, $j);
                }
            }
//            重置递增数列
            $h = ($h - 1) / 3;
        }

        $this->log('end it has spend ' . (microtime(true) - $start));
    }
}