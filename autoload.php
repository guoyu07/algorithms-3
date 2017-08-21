<?php
/**
 * User: Nine
 * Date: 2017/8/21
 * Time: 下午9:32
 */

spl_autoload_register(function ($className) {

    $fileName = str_replace('\\', DIRECTORY_SEPARATOR, __DIR__ . '/..' . '\\' . $className) . '.php';
    if (is_file($fileName)) {
        require $fileName;
    } else {
        echo $fileName . ' is not exist';
        die;
    }
});