<?php

return [

    'default' => 'pgsql',

    'connections' => [

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => '127.0.0.1',
            'port' => '5432',
            'database' => 'main',
            'username' => 'postgres',
            'password' => 'postgres'
        ]
    ]
];