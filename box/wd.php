<?php

class SimpleClass {
    public function getAll(): string
    {
        return 'hello world';
    }
}

$str = 'SimpleClass';
$obj = new SimpleClass();
$obj = new $str();
$obj = new ('SimpleClass');

echo (new SimpleClass())->GETALL();
