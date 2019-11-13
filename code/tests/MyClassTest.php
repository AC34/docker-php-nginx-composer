<?php

use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase{
    function testMyClass(){
        $c = new MyClass();
        $this->assertEquals($c->hello(),"hello");
    }
}