<?php
namespace magic_methods01;


class MyClass
{
    public function __invoke(...$arguments)
    {
        echo 'Called to the __invoke method';
    }
}

$instance = new MyClass;
$instance();
