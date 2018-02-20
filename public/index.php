<?php

define('NEOPHP_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

$app = createApp(__DIR__.'/..');
$app->init();