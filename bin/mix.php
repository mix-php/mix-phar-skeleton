<?php

// Autoload
require __DIR__ . '/../vendor/autoload.php';

// Run application
$app = new Mix\Console\Application(require __DIR__ . '/../manifest.php');
$app->run();
