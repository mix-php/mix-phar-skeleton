<?php

/**
 * 用户助手函数
 * @author liu,jian <coder.keda@gmail.com>
 */

/**
 * 获取 Phar 文件所在目录
 * @return string
 */
function get_phar_dir()
{
    return str_replace(['phar://', '/'], ['', DIRECTORY_SEPARATOR], dirname(dirname(__DIR__)));
}

/**
 * 获取全局App对象
 * @return \Mix\Console\Application
 */
if (!function_exists('app')) {
    function app()
    {
        return $GLOBALS['app'];
    }
}

/**
 * 获取全局上下文对象
 * @return \Mix\Bean\ApplicationContext
 */
if (!function_exists('context')) {
    function context()
    {
        return app()->context;
    }
}
