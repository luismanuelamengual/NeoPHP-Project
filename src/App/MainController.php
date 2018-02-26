<?php

namespace App;

use NeoPHP\Routing\Routes;

class MainController {

    public function main() {
        $this->registerRoutes();
        $this->handleRequest();
    }

    public function registerRoutes() {
        Routes::get("/", function () {
            return create_view("welcome", ["name"=>get_current_user()]);
        });
    }

    public function handleRequest() {
        Routes::handleRequest();
    }
}