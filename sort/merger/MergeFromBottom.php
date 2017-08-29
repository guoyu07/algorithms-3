<?php
/**
 * User: Nine
 * Date: 2017/8/28
 * Time: 下午12:58
 */

namespace algorithms\sort\merger;

/**
 * Class MergeFromBottom
 * @package algorithms\sort\merger
 */
class MergeFromBottom extends AbstractMerger
{
    public function sort()
    {
        for ($step = 1; $step < $this->_length; $step += $step) {
            for ($i = 0; $i < $this->_length - $step; $i += 2 * $step) {
                $this->merge($i, $i + $step - 1, min($i + 2 * $step - 1, $this->_length - 1));
            }
        }
    }
}