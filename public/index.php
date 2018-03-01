<?php

define('NEOPHP_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

$app = get_app(__DIR__.'/..');
$app->start();