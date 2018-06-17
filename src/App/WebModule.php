<?php

namespace App;

use NeoPHP\Module;
use NeoPHP\Routing\Routes;

class WebModule extends Module {

    public function start() {

        Routes::get("/", function () {
            return create_view("welcome", ["name" => get_current_user()]);
        });
    }
}