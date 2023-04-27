<?php


namespace core;


class Container
{

    protected $bindings = [];
    // add our service like database connection
    // to our bindings array
    public function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }


    // return the needed service like database connection
    // or any class service exists in bindings array
    public function resolve($key)
    {
        if (!array_key_exists($key, $this->bindings)) {
            throw new \Exception("No matching binding found for {$key}");
        }
        $resolver = $this->bindings[$key];

        // return function that execute database connection as result
        return call_user_func($resolver);
    }

}