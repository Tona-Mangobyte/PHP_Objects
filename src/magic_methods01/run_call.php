<?php
namespace magic_methods01;

require "Str.php";

$s = new Str('Hello, World!');
// __call
echo $s->upper() . '<br>'; // HELLO, WORLD!
echo $s->lower() . '<br>'; // hello, world!
echo $s->length() . '<br>'; // 13

echo PHP_EOL;

// __callStatic()

echo Str::lower('Hello') . '<br>';
echo Str::upper('Hello') . '<br>';
echo Str::len('Hello') . '<br>';