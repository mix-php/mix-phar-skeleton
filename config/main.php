<?php

// Console应用配置
return [

    // 应用名称
    'appName'          => 'mix-console',

    // 应用版本
    'appVersion'       => '0.0.0',

    // 应用调试
    'appDebug'         => true,

    // 初始化回调
    'initialize'       => [],

    // 基础路径
    'basePath'         => WORK_DIR,

    // 命令命名空间
    'commandNamespace' => 'Cli\Commands',

    // 命令
    'commands'         => [

        'hi' => ['Hello', 'description' => "Hello world."],

    ],

    // 组件配置
    'components'       => [

        // 错误
        'error' => [
            // 类路径
            'class' => 'Mix\Console\Error',
            // 错误级别
            'level' => E_ALL,
        ],

        // 日志
        'log'   => [
            // 类路径
            'class'   => 'Mix\Log\Logger',
            // 日志记录级别
            'levels'  => ['emergency', 'alert', 'critical', 'error', 'warning', 'notice', 'info', 'debug'],
            // 处理者
            'handler' => [
                // 类路径
                'class'       => 'Mix\Log\FileHandler',
                // 日志目录
                'dir'         => WORK_DIR . DIRECTORY_SEPARATOR . 'logs',
                // 日志轮转类型
                'rotate'      => Mix\Log\FileHandler::ROTATE_DAY,
                // 最大文件尺寸
                'maxFileSize' => 0,
            ],
        ],

    ],

    // 类库配置
    'libraries'        => [

    ],

];
