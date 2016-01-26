<?php

session_start();

class Auth
{
    private static $auth = array();

    public static function getIdentity()
    {
        self::$auth = $_SESSION;
        return self::$auth;
    }

    public static function goAway($way = '/')
    {
        header("Location: ".$way);
        exit;
    }
}