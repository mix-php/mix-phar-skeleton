<?php

namespace App\Commands;

use Mix\Console\CommandLine\Flag;
use Noodlehaus\Config;

/**
 * Class HelloCommand
 * @package Phar\Commands
 * @author liu,jian <coder.keda@gmail.com>
 */
class HelloCommand
{

    /**
     * @var Config
     */
    public $config;

    /**
     * HelloCommand constructor.
     */
    public function __construct()
    {
        $this->config = context()->get('config');
    }

    /**
     * 主函数
     */
    public function main()
    {
        // 获取参数
        $name = Flag::string(['n', 'name'], 'Xiao Ming');
        $say  = Flag::string('say', 'Hello, World!');
        println("{$name}: {$say}");

        // 读取全部配置
        var_dump($this->config->all());
    }

}
