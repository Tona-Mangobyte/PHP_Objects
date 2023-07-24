<?php
namespace magic_methods01;

require "HtmlElement.php";

$div = new HtmlElement('div');

// set
$div->id = 'page';
$div->class = 'light';
// get
echo $div->class . PHP_EOL; // light
echo $div->id . PHP_EOL; // main
// result
echo $div->html('Hello') . PHP_EOL;
