<?php

require __DIR__ . '/../vendor/autoload.php';

use Mix\Concurrent\Coroutine;

// Coroutine
if (extension_loaded('swoole')) {
    Coroutine::set([
        'max_coroutine' => 300000,
        'hook_flags'    => SWOOLE_HOOK_ALL ^ SWOOLE_HOOK_FILE,
    ]);
}

// Run application
$config = require __DIR__ . '/../config/main.php';
(new Mix\Console\Application($config))->run();
