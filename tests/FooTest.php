<?php

class FooTest extends PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $foo = new Foo();
        $this->assertEquals(2, $foo->add(1,1));
    }
}
