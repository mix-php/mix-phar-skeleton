<?php

namespace Cli\Commands;

use Mix\Console\Command;
use Mix\Console\CommandLine\Flag;

/**
 * 命令范例
 * @author LIUJIAN <coder.keda@gmail.com>
 */
class HelloCommand extends Command
{

    /**
     * 主函数
     */
    public function main()
    {
        println('Hello, World!');
        $name = Flag::string('name', 'none');
        println("My name is {$name}");
    }

}
