<?php

class Loader
{
    public static $dirs = array(
        'classes/',
        'classes/controllers/',
        'classes/models/'
    );

    public static function load()
    {
        foreach(self::$dirs as $directory)
        {
            foreach(scandir($directory) as $file)
            {
                if(!is_dir($directory.$file) && ($file !== '.' || $file !== '..'))
                {
                    if($file == 'Loader.php')
                        continue;
                    require_once $directory.$file;
                }
            }
        }
    }
}