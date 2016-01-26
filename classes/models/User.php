<?php

class User
{
    private static $main  = array(
        'login' => 'tina_ray',
        'password' => '48ded266bfe0df85e6e2f60800449105'
    );

    public static function login($login, $password)
    {
        if($login == self::$main['login'] && md5(base64_encode(md5($password))) == self::$main['password'])
            return true;
        else
            return false;
    }
}