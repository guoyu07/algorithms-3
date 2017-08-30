<?php
/**
 * User: Nine
 * Date: 2017/8/21
 * Time: 下午9:35
 */

require_once __DIR__ . '/../autoload.php';

// union-find的第一版算法
//$test = new \algorithms\unionFind\quickFind();
//$test->start();


// sorts算法
//$test = new \algorithms\sort\Select();
//$test->sort();

// insert算法
//$test = new \algorithms\sort\Insert();
//$test->sort();

// shell算法
//$test = new \algorithms\sort\Shell();
//$test->sort();

// merge算法
//$test = new \algorithms\sort\merger\MergeFromTop();
//$test->sort();
//var_dump($test->_shuffle);

//$test = new \algorithms\sort\merger\MergeFromBottom();
//$test->sort();
//var_dump($test->_shuffle);

// quick算法
$test = new \algorithms\sort\quick\FirstVersion();
$test->sort();
var_dump($test->_shuffle);
