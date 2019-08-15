<?php

define('NEOPHP_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

$app = create_app(__DIR__.'/..');
$app->addModule(new \NeoPHP\Controllers\ControllersWebModule());
$app->addModule(new \NeoPHP\Resources\ResourcesWebModule());
$app->addModule(new \NeoPHP\Formatters\FormatterWebModule());
$app->addModule(new \NeoPHP\Auth\AuthWebModule());
$app->addModule(new \App\WebModule());
$app->start();