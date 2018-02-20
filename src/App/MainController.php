<?php

namespace App;

use NeoPHP\Database\Databases;
use NeoPHP\Database\Query\DeleteQuery;
use NeoPHP\Database\Query\InsertQuery;
use NeoPHP\Database\Query\Join;
use NeoPHP\Database\Query\SelectQuery;
use NeoPHP\Database\Query\UpdateQuery;
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
        Routes::get("test/rama", "App\Tests\TestController@ramaAction");
        Routes::any("timpla", "TimplaController");

        Routes::after("users/*", function() { echo "ramach<br>"; });

        Routes::get("err", function() {
            $a = 6 / 0;
        });
        Routes::get("err2", function() {
            throw new \RuntimeException("rama ex");
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

        Routes::get("db", function() {

            /*
            $query = new InsertQuery("\"user\"");
            $query->set("username", "ropla");
            $query->set("password", "candulix");
            $query->set("personid", 4);
            getConnection()->exec($query);
            */

            /*
            $query = new UpdateQuery("person");
            $query->set("age", 35);
            $query->addWhere("personid", 1);
            getConnection()->exec($query);
            */

            /*
            $query = new DeleteQuery("\"user\"");
            $query->addWhere("personid", 4);
            getConnection()->exec($query);
            */

            /*
            $query = new SelectQuery("\"user\"");
            $query->addWhere("userid", "<", 12);
            $query->addWhere("password", "ilike", "%rama%");
            $query->addLeftJoin("person", "\"user\".personid", "person.personid");
            $query->addOrderByField("userid");
            $result = getConnection()->query($query);*/

            /*
            getConnection()->getTable("person")
                ->set("name", "Jessica")
                ->set("lastname", "Alba")
                ->set("age", 19)
                ->insert();
            */


            $result = getResource("\"person\"")->find();

            /*$result = getResource("\"user\"")
                ->addInnerJoin("person", "\"user\".personid", "person.personid")
                ->find();
*/
            echo "<pre>";
            print_r ($result);
            echo "</pre>";
        });
    }
}