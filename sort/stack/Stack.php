<?php
/**
 * User: Nine
 * Date: 2017/9/2
 * Time: 下午3:10
 */

namespace algorithms\sort\stack;

/**
 * Class Stack
 * @package algorithms\stack
 */
class Stack
{
    /**
     * @var array
     */
    public $_stack;

    /**
     * @var int
     */
    public $_start;

    /**
     * @var int
     */
    public $_end;

    /**
     * Stack constructor.
     * @param int $num
     */
    public function __construct($num = 10)
    {
        $this->_stack = [];
        $this->_start = 0;
        $this->_end = 100;
//        当前指针
        $this->_needle = 0;
        while ($num-- > 0) {
            $rand = mt_rand($this->_start, $this->_end);
            !in_array($rand, $this->_stack) ?: $rand = mt_rand($this->_start, $this->_end);
            $this->insert($rand);
        }
    }

    /**
     * @param $value
     */
    public function insert($value)
    {
        $this->_stack[++$this->_needle] = $value;
        $this->swim($this->_needle);
    }

    /**
     * @return mixed
     */
    public function delMax()
    {
//        获取最大值
        $max = $this->_stack[1];
//        与最后的节点交换
        $this->exchange(1, $this->_needle--);
//        防止游离
        unset($this->_stack[$this->_needle + 1]);
        //        下沉第一个元素
        $this->sink(1);
        return $max;
    }

    /**
     * @param $first
     * @param $next
     */
    public function exchange($first, $next)
    {
        $tmp = $this->_stack[$first];
        $this->_stack[$first] = $this->_stack[$next];
        $this->_stack[$next] = $tmp;
    }

    /**
     * @param $first
     * @param $next
     * @return bool
     */
    public function less($first, $next)
    {
        return $this->_stack[$first] < $this->_stack[$next];
    }

}