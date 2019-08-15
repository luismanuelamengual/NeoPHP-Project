<?php

return [

    "default" => "files",

    'loggers' => [
        'files' => [
            'handlers' => ["rotating_file_handler"]
        ],
        'stdout' => [
            'handlers' => [ "stdout_handler" ]
        ],
        'stderr' => [
            "handlers" => [ "stderr_handler" ]
        ]
    ],

    "handlers" => [
        "rotating_file_handler" => [
            "class" => "Monolog\Handler\RotatingFileHandler",
            "level" => "DEBUG",
            "formatter" => "main_formatter",
            "filename" => get_app()->storagePath() . DIRECTORY_SEPARATOR . "logs" . DIRECTORY_SEPARATOR . "{date}",
            "maxFiles" => 30,
            "set_filename_format" => ["{date}.log", "Y-m-d"]
        ],
        "stdout_handler" => [
            "class" => "Monolog\Handler\StreamHandler",
            "level" => "DEBUG",
            "formatter" => "logstash_formatter",
            "stream" => "php://stdout"
        ],
        "stderr_handler" => [
            "class" => "Monolog\Handler\StreamHandler",
            "level" => "ERROR",
            "formatter" => "logstash_formatter",
            "stream" => "php://stderr"
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