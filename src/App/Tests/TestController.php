<?php

namespace App\Tests;

class TestController {

    public function index ($name) {
        return "Hola $name estamos en el index de test controller";
    }

    public function post($result) {
        echo "[[$result]]";
    }
}