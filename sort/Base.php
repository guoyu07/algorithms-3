<?php

/**
 * User: Nine
 * Date: 2017/8/25
 * Time: 上午9:59
 */

namespace algorithms\sort;

use algorithms\Util;

/**
 * Class Base
 * @package algorithms\sort
 */
abstract class Base
{

    /**
     * Base constructor.
     * @param int $num
     */
    public function __construct($num = 20)
    {
        $this->_shuffle = Util::makeRandArr(0, $num, $num);
        $this->_length = count($this->_shuffle);
        $this->_tmp = [];
    }

    /**
     * @param $first
     * @param $next
     */
    public function exchange($first, $next)
    {
        $tmp = $this->_shuffle[$first];
        $this->_shuffle[$first] = $this->_shuffle[$next];
        $this->_shuffle[$next] = $tmp;
    }

    /**
     * @param $first
     * @param $next
     * @return mixed
     */
    public function compare($first, $next)
    {
        return $this->_shuffle[$first] > $this->_shuffle[$next];
    }

    /**
     * @param $first
     * @param $next
     * @return mixed
     */
    public function compareTo($first, $next)
    {
        return $first - $next;
    }

    /**
     * @return bool
     */
    public function check()
    {
        foreach ($this->_shuffle as $key => $value) {
            if ($key == $this->_length - 1) break;
            if ($this->_shuffle[$key + 1] < $value) return false;
        }
        return true;
    }

    /**
     *
     */
    public function log()
    {
        echo date('H:i:s', time()) . " : " . implode("\t", array_map(function ($v) {
                return $v;
            }, func_get_args())) . PHP_EOL;
    }

    /**
     * @return mixed
     */
    abstract public function sort();
}