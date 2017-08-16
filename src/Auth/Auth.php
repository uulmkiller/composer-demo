<?php
namespace Auth;

/**
* 
*/
class Auth
{
    private static $name;
    public static function getName()
    {
        return self::$name;
    }

    public static function setName($name)
    {
        self::$name = $name;
    }
}