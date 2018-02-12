<?php

namespace App;

use NeoPHP\Routing\Routes;

class MainController {

    public function boot() {
        $this->registerRoutes();
        Routes::handleRequest();
    }

    public function registerRoutes() {
        Routes::get("persons", "PersonsController@showPersons");
        Routes::get("persons/rama", "PersonsController@showRamaPersons");
        Routes::get("users", "UsersController@showUsers");
        Routes::get("users/:userId/", "App\Users\UsersController@showUser");
        Routes::post("users/:userId/", "UsersController@updateUser");
        Routes::get("users/:userId/show", "UsersController@showUser");
        Routes::get("test/*", "App\Tests\TestController");
        Routes::get("test/rama", "TestController@ramaAction");
        Routes::any("timpla", "TimplaController");

        Routes::get("props", function() {
            echo "<br>app.mainConnection: " . Properties::get("app.mainConnection");
            echo "<br>app.connections: ";
            $connections = Properties::get("app.connections");
            echo "<pre>";
            print_r ($connections);
            echo "</pre>";
            echo "<br>app.rama: " . Properties::get("app.rama");
            echo "<br>database.tata: " . Properties::get("database.tata");
            echo "<br>tipa: " . Properties::get("tipa", "vane");

            Properties::set("app.rama", "duplax");
            echo "<br>app.rama: " . Properties::get("app.rama");
            Properties::set("vane", "te rompo");
            echo "<br>vane: " . Properties::get("vane");
        });

        Routes::get("err", function() {
            $a = 6 / 0;
        });

        Routes::any("rama", function () {
            header('Location: http://localhost/timpla');
        });
        Routes::after("rama", function() {
            echo "hola";
        });
        Routes::error("curli/*", function($e) {
            echo "Houston, tenemos un problema !!";
            echo "<pre>";
            print_r ($e);
        });
    }
}