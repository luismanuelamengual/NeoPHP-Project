<?php

return [

    "name" => get_env("APP_NAME", "MyApp"),

    "debug" => get_env("APP_DEBUG", false),

    "log_errors" => get_env("APP_LOG",true),

    "email_errors" => get_env("APP_MAIL_ERROR", false),

    "email_error_recipients" => explode(",", get_env("APP_MAIL_RECIPIENTS"))
];