<?php


namespace core;


class Container
{

    protected $bindings = [];

    public function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }


    // return the needed services like database connection
    // or any class services exists in bindings array
    public function resolve($key)
    {
        if (!array_key_exists($key, $this->bindings)) {

            throw new \Exception("No matching binding found for {$key}");

        }

        $resolver = $this->bindings[$key];

        return call_user_func($resolver);

    }

}