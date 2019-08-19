<?php

require __DIR__ . '/../vendor/autoload.php';

// Run application
$config = require __DIR__ . '/../config/main.php';
(new Mix\Console\Application($config))->run();
