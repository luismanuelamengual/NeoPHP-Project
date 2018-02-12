<?php

define('NEOPHP_START', microtime(true));
require __DIR__.'/../vendor/autoload.php';
NeoPHP\Core\Application::init(realpath(__DIR__.'/..'));