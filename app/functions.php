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
