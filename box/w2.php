<?php

class SimpleClass extends stdClass {}

$id = 1;
$obj = new \stdClass();
$obj2 = new SimpleClass();
var_dump($id, $obj, $obj2);