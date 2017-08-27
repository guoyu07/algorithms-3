<?php
/**
 * User: Nine
 * Date: 2017/8/25
 * Time: 上午10:11
 */

namespace algorithms\sort;

/**
 * Class Select
 * @package algorithms\sort
 */
class Select extends Base
{
    /**
     *
     */
    public function sort()
    {
        $this->log("start");
        $start = microtime(true);
        for ($i = 0; $i < $this->_length; ++$i) {
            $min = $i;
            for ($j = $i + 1; $j < $this->_length; ++$j) {
                if ($this->compare($min, $j)) {
                    $this->exchange($j, $min);
                }
            }
        }
        $this->log('it has spend ' . (microtime(true) - $start));
    }

}