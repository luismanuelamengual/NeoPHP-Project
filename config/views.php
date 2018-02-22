<?php

return [

    "default" => "blade",

    "factories" => [
        "blade" => [
            "class" => NeoPHP\Views\Blade\BladeViewFactory::class
        ],
        "twig" => [
            "class" => NeoPHP\Views\Twig\TwigViewFactory::class
        ],
        "smarty" => [
            "class" => NeoPHP\Views\Smarty\SmartyViewFactory::class
        ]
    ]
];