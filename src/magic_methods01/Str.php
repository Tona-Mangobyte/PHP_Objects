<?php

namespace magic_methods01;

use BadMethodCallException;
use Exception;

class Str
{
    private $s = '';

    private $functions = [
        'length' => 'strlen',
        'upper' => 'strtoupper',
        'lower' => 'strtolower'
        // map more method to functions
    ];

    public function __construct(string $s)
    {
        $this->s = $s;
    }
    // PHP __call() magic method example
    public function __call($method, $args)
    {
        /*if (!in_array($method, array_keys($this->functions))) {
            throw new BadMethodCallException();
        }*/
        if (!array_key_exists($method, $this->functions)) {
            throw new BadMethodCallException();
        }

        array_unshift($args, $this->s);

        return call_user_func_array($this->functions[$method], $args);
    }


    private static $methods = [
        'upper' => 'strtoupper',
        'lower' => 'strtolower',
        'len' => 'strlen'
    ];
    // PHP __callStatic() magic method example
    public static function __callStatic(string $method, array $parameters)
    {
        if (!array_key_exists($method, self::$methods)) {
            throw new Exception('The ' . $method . ' is not supported.');
        }

        return call_user_func_array(self::$methods[$method], $parameters);
    }
}