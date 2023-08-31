<?php

// Este script é responsável pelo roteamento(urls) do nosso sistema

namespace bng\System;

use Exception;
use bng\Controllers\Main;

class Router
{
    //função que faz o tratamento do que passaremos
    public static function dispatch()
    {
        // main route values
        // permite saber o que foi requisitado (get, post, puts, etc...)
        $httpverb = $_SERVER['REQUEST_METHOD'];
        $controller = 'main';
        $method = 'index';

        // check uri parameters
        if (isset($_GET['ct'])) {
            $controller = $_GET['ct'];
        }

        if (isset($_GET['mt'])) {
            $method = $_GET['mt'];
        }

        // method parameters
        $parameters = $_GET;

        // remove controller from parameters
        if (key_exists("ct", $parameters)) {
            unset($parameters['ct']);
        }

        // remove method from parameters
        if (key_exists("mt", $parameters)) {
            unset($parameters['mt']);
        }

        // tries to instanciate the controller and execute the method
        try {
            $class = "bng\Controllers\\$controller";
            $controller = new $class();
            $controller->$method(...$parameters);
        } catch (Exception $err) {
            die($err->getMessage());
        }
    }
}
