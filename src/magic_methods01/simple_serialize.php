<?php
namespace magic_methods01;

require "Customer.php";

$customer = new Customer(10, 'John Doe', 'john.doe@example.com');
$str = serialize($customer);

var_dump($str);