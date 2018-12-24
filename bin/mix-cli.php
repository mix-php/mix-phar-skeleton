<?php

// console入口文件

require __DIR__ . '/../vendor/autoload.php';

define('WORK_DIR', substr(dirname(dirname(__DIR__)), 7));

$config = require __DIR__ . '/../config/main.php';
(new Mix\Console\Application($config))->run();
