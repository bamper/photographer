<?php

class Router
{
    public static $route_array = array(
        '/main/' => array(
            'controller' => 'MainController',
            'method' => 'main'
        ),
        '/about/' => array(
            'controller' => 'MainController',
            'method' => 'about'
        ),
        '' => array(
            'controller' => 'MainController',
            'method' => 'index'
        ),
        '/' => array(
            'controller' => 'MainController',
            'method' => 'index'
        ),
        '/portfolio/' => array(
            'controller' => 'MainController',
            'method' => 'portfolio'
        ),
        '/contact/' => array(
            'controller' => 'MainController',
            'method' => 'contact'
        )
    );

    public static function route()
    {
        $call = self::$route_array[$_SERVER['REQUEST_URI']];
        $controller = new $call['controller']();
        $controller->$call['method']();

    }
}