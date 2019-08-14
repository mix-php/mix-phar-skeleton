<?php

// Console应用配置
return [

    // 应用名称
    'appName'          => 'mix-phar',

    // 应用版本
    'appVersion'       => '0.0.0',

    // 应用调试
    'appDebug'         => true,

    // 基础路径
    'basePath'         => str_replace(['phar://', '/'], ['', DIRECTORY_SEPARATOR], dirname(dirname(__DIR__))),

    // 命令命名空间
    'commandNamespace' => 'Console\Commands',

    // 命令
    'commands'         => [

        'hl' => [
            \Phar\Commands\HelloCommand::class,
            'description' => "\tEcho demo.",
            'options'     => [
                [['n', 'name'], 'description' => 'Your name'],
                ['say', 'description' => "\tSay ..."],
            ],
        ],

    ],

    // 依赖配置
    'beans'            => [

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
                ['ref' => 'log'],
            ],
        ],

        // 日志
        [
            // 名称
            'name'       => 'log',
            // 作用域
            'scope'      => \Mix\Bean\BeanDefinition::SINGLETON,
            // 类路径
            'class'      => \Mix\Log\Logger::class,
            // 属性注入
            'properties' => [
                // 日志记录级别
                'levels'  => ['emergency', 'alert', 'critical', 'error', 'warning', 'notice', 'info', 'debug'],
                // 处理器
                'handler' => ['ref' => \Mix\Log\MultiHandler::class],
            ],
        ],

        // 日志处理器
        [
            // 类路径
            'class'           => \Mix\Log\MultiHandler::class,
            // 构造函数注入
            'constructorArgs' => [
                // 标准输出处理器
                ['ref' => \Mix\Log\StdoutHandler::class],
                // 文件处理器
                ['ref' => \Mix\Log\FileHandler::class],
            ],
        ],

        // 日志标准输出处理器
        [
            // 类路径
            'class' => \Mix\Log\StdoutHandler::class,
        ],

        // 日志文件处理器
        [
            // 类路径
            'class'      => \Mix\Log\FileHandler::class,
            // 属性注入
            'properties' => [
                // 日志目录
                'dir'         => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'logs',
                // 日志轮转类型
                'rotate'      => \Mix\Log\FileHandler::ROTATE_DAY,
                // 最大文件尺寸
                'maxFileSize' => 0,
            ],
        ],
    ],

];
