<?php

// 应用清单
return [

    // 应用名称
    'appName'    => 'mix-phar',

    // 应用版本
    'appVersion' => '0.0.0',

    // 应用调试
    'appDebug'   => true,

    // 基础路径
    'basePath'   => get_phar_dir(),

    // 协程配置
    'coroutine'  => [
        // 启用
        'enable'  => true,
        // 选项
        'options' => [
            'max_coroutine' => 300000,
            'hook_flags'    => 1879048191 ^ 256, // SWOOLE_HOOK_ALL ^ SWOOLE_HOOK_FILE,
        ],
    ],

    // 命令
    'commands'   => [

        'hl' => [
            \App\Commands\HelloCommand::class,
            'description' => "\tEcho demo.",
            'options'     => [
                [['n', 'name'], 'description' => 'Your name'],
                ['say', 'description' => "\tSay ..."],
            ],
        ],

    ],

    // 依赖配置
    'beans'      => [

        // 错误
        [
            // 名称
            'name'            => 'error',
            // 作用域
            'scope'           => \Mix\Bean\BeanDefinition::SINGLETON,
            // 类路径
            'class'           => \Mix\Console\Error::class,
            // 构造函数注入
            'constructorArgs' => [
                // 错误级别
                E_ALL,
                // 日志
                ['ref' => 'logger'],
            ],
            // 属性注入
            'properties'      => [
                // 事件调度器
                'dispatcher' => ['ref' => 'eventDispatcher'],
            ],
        ],

        // 日志
        [
            // 名称
            'name'            => 'logger',
            // 作用域
            'scope'           => \Mix\Bean\BeanDefinition::SINGLETON,
            // 类路径
            'class'           => \Mix\Monolog\Logger::class,
            // 构造函数注入
            'constructorArgs' => [
                // name
                'MIX',
                // handlers
                [new \Mix\Monolog\Handler\ConsoleHandler],
                // processors
                [new \Monolog\Processor\PsrLogMessageProcessor],
            ],
        ],

        // 事件调度器
        [
            // 名称
            'name'            => 'eventDispatcher',
            // 作用域
            'scope'           => \Mix\Bean\BeanDefinition::SINGLETON,
            // 类路径
            'class'           => \Mix\Event\EventDispatcher::class,
            // 构造函数注入
            'constructorArgs' => [
                // ...
            ],
        ],

        // 配置
        [
            // 名称
            'name'            => 'config',
            // 作用域
            'scope'           => \Mix\Bean\BeanDefinition::SINGLETON,
            // 类路径
            'class'           => \Noodlehaus\Config::class,
            // 构造函数注入
            'constructorArgs' => [
                // 配置文件目录
                get_phar_dir() . DIRECTORY_SEPARATOR . 'config.ini',
            ],
        ],

    ],

];
