<?php

define('NEOPHP_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

$app = create_app(__DIR__.'/..');
$app->addModule(new \App\WebModule());
$app->addModule(new \NeoPHP\Resources\ResourcesWebModule());
$app->start();