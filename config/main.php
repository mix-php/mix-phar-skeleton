<?php

// Console应用配置
return [

    // 应用名称
    'appName'          => 'mix-cli',

    // 应用版本
    'appVersion'       => '0.0.0',

    // 应用调试
    'appDebug'         => true,

    // 初始化回调
    'initialize'       => [],

    // 基础路径
    'basePath'         => str_replace(['phar://', '/'], ['', DIRECTORY_SEPARATOR], dirname(dirname(__DIR__))),

    // 运行目录路径
    'runtimePath'      => '',

    // 命令命名空间
    'commandNamespace' => 'Cli\Commands',

    // 命令
    'commands'         => [

        'hi' => ['Hello', 'description' => "Hello world.", 'options' => ['--name' => 'your name.']],

    ],

    // 组件配置
    'components'       => [

        // 错误
        'error' => [
            // 依赖引用
            'ref' => beanname(Mix\Console\Error::class),
        ],

    ],

    // 依赖配置
    'beans'            => [

        [
            // 类路径
            'class'      => Mix\Console\Error::class,
            // 属性
            'properties' => [
                // 错误级别
                'level' => E_ALL,
            ],
        ],

    ],

];
