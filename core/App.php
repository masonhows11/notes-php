<?php

namespace core;

class App
{

    protected static $container;

    public static function setContainer($container)
    {
        static::$container = $container;
    }

    public static function container()
    {
        return static::$container;
    }

    // we can delegate bind & resolve method from container class
    // in app class
    public static function bind($key, $resolver)
    {
        static::container()->bind($key, $resolver);
    }


    public static function resolve($key)
    {
        return static::container()->resolve($key);
    }

}