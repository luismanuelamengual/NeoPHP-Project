<?php

return [

    'default' => 'pgsql',

    'connections' => [
        'pgsql' => [
            'driver' => 'pgsql',
            'host' => '127.0.0.1',
            'port' => '5432',
            'database' => 'testdb',
            'username' => 'postgres',
            'password' => 'postgres',
            'logQueries' => true
        ]
    ]
];