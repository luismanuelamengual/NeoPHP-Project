<?php

return [

    "default" => get_env("MAIL_DEFAULT_SERVER", "main"),

    "servers" => [

        "main" => [
            "host" => get_env("MAIL_HOST", "sitrack.com"),
            "username" => get_env("MAIL_USERNAME", "notificaciones"),
            "password" => get_env("MAIL_PASSWORD", "password")
        ]
    ]
];