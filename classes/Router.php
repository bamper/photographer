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
        $router = str_replace('/index.php', '', $_SERVER['REQUEST_URI']);
        $call = self::$route_array[$router];
        $controller = new $call['controller']();
        $controller->$call['method']();

    }
}