<?php

return [

    "default" => "main",

    'loggers' => [
        'main' => [
            'handlers' => ["rotating_file_handler"]
        ]
    ],

    "handlers" => [
        "rotating_file_handler" => [
            "class" => "Monolog\Handler\RotatingFileHandler",
            "level" => "DEBUG",
            "formatter" => "main_formatter",
            "filename" => getApp()->getStoragePath() . DIRECTORY_SEPARATOR . "logs" . DIRECTORY_SEPARATOR . "{date}",
            "maxFiles" => 30,
            "set_filename_format" => ["{date}.log", "Y-m-d"]
        ]
    ],

    "formatters" => [
        "main_formatter" => [
            "class" => "Monolog\Formatter\LineFormatter",
            "format" => "[%datetime%] %channel%.%level_name%: %message%\n",
            'include_stacktraces' => true
        ]
    ]
];