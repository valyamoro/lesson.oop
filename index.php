<?php

use PHPUnit\Framework\TestCase;

interface Event {}

class Accept
{
    public function add(Event $event)
    {
        echo 'hello';
    }
}

class B implements Event {}

$obj = new Accept();
$obj->add((new B));















































































































































































































































































































