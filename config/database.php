<?php

return [

    'default' => get_env("DB_DEFAULT_CONNECTION", 'main'),

    'connections' => [

        'main' => [
            'driver' => get_env("MAIN_DB_DRIVER",'pgsql'),
            'host' => get_env("MAIN_DB_HOST",'127.0.0.1'),
            'port' => get_env("MAIN_DB_PORT", '5432'),
            'database' => get_env("MAIN_DB_DATABASE", 'sitrack'),
            'username' => get_env("MAIN_DB_USERNAME", 'postgres'),
            'password' => get_env("MAIN_DB_PASSWORD",'secret')
        ]
    ]
];