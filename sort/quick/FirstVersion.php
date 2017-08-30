<?php
/**
 * User: Nine
 * Date: 2017/8/30
 * Time: 下午9:34
 */

namespace algorithms\sort\quick;

use algorithms\sort\Base;

/**
 * Class FirstVersion
 * @package algorithms\sort\quick
 */
class FirstVersion extends Base
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
        $j = $this->partition($start, $end);

        self::sort($start, $j - 1);
        self::sort($j + 1, $end);
    }

    /**
     * @param $start
     * @param $end
     * @return mixed
     */
    protected function partition($start, $end)
    {
        $i = $v = $start;
        $j = $end + 1;
        while (true) {
            while ($this->compare($v, ++$i)) {
//                防止超出范围
                if ($i == $end) break;
            }
            while ($this->compare(--$j, $v)) {
//                防止超出范围
                if ($j == $start) break;
            }
            if ($i >= $j) break;
//            运行到此时，说明$i对应的值已经大于$j对应的值，所以交换
            $this->exchange($i, $j);
        }
//        交换开始值
        $this->exchange($v, $j);
        return $j;
    }
}