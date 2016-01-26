<?php

class Database
{
    public static $_instance = null;

    public static function getInstance()
    {
        if(self::$_instance == null)
            self::$_instance = new self;
        return self::$_instance;
    }

    private function __construct()
    {
    }

    public function getConnection()
    {
        $dsn = "mysql:host=tina00.mysql.ukraine.com.ua;dbname=tina00_db;charset=utf8";
        $opt = array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        $pdo = new PDO($dsn, 'tina00_db', '100_pudov', $opt);
        return $pdo;
    }
}