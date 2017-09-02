<?php
/**
 * User: Nine
 * Date: 2017/9/2
 * Time: 下午3:11
 */

namespace algorithms\sort\stack;

/**
 * Class TwoFork
 * @package algorithms\stack
 */
class TwoFork extends Stack
{

    /**
     * @param $key
     */
    public function swim($key)
    {
        while ($key > 1) {
//           获取父级
            $j = floor($key / 2);
            if ($this->less($key, $j)) break;
            $this->exchange($key, $j);
            $key = $j;
        }
    }

    /**
     * @param $key
     */
    public function sink($key)
    {
//        获取子元素
        $j = $key * 2;
        while ($key * 2 < $this->_needle) {
//        比较两个元素，获取大的一个
            $this->less($j, $j + 1) && $j += 1;
            if ($this->less($key, $j)) {
                $this->exchange($key, $j);
                $key = $j;
            } else {
                break;
            }
        }
    }
}