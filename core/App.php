<?php

namespace core;

class App
{

    protected static $container;

    // set the container obj to the static properties $container
    public static function setContainer($container)
    {
        static::$container = $container;
    }

    // get the container obj to the static properties $container
    // for use
    public static function getContainer()
    {
        return static::$container;
    }

    // we can delegate bind  method from container class
    // in app class
    public static function bind($key, $resolver)
    {
        static::getContainer()->bind($key, $resolver);
    }

    // we can delegate resolve method from container class
    // in app class
    public static function resolve($key)
    {
        return static::getContainer()->resolve($key);
    }

}