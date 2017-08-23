<?php

/**
 * User: Nine
 * Date: 2017/8/21
 * Time: 下午8:51
 */

namespace algorithms\unionFind;

use algorithms\Util;

/**
 * Class WeightQuickUnion
 * @package algorithms\unionFind
 */
class WeightQuickUnion
{
    /**
     * @var
     */
    public $_count;

    /**
     * @var
     */
    public $_num;

    /**
     * @var
     */
    public $_int;

    /**
     * quickFind constructor.
     * @param int $num
     */
    public function __construct($num = 100)
    {
        $this->_num = $num;
        for ($i = 0; $i < $num; ++$i) {
            $this->_int[$i] = $i;
        }
    }

    /**
     * @param $key
     * @return mixed
     */
    public function find($key)
    {
        if($this->_int[$key] !== $key){
            $key = $this->_int[$key];
        }
        return $key;
    }

    /**
     * @param $p
     * @param $q
     * @return bool
     */
    public function connection($p, $q)
    {
        return $this->find($p) == $this->find($q);
    }

    /**
     * @param $p
     * @param $q
     */
    public function union($p, $q)
    {
        $pId = $this->find($p);
        $qId = $this->find($q);
        if($pId == $qId) return;
        $this->_int[$pId] = $qId;
    }

    /**
     *
     */
    public function start()
    {
        $randArr = Util::makeRandArr();
        while (count($randArr) > 0) {
            $p = array_pop($randArr);
            $q = array_pop($randArr);
            if ($this->connection($p, $q)) continue;
            $this->union($p, $q);
        }
        var_dump($this->_int);
    }
}