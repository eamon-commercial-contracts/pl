<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Exceptions\PropertyDoesNotExistsException;
use \App\Library\MagicGetterSetter;

class MagicTest extends TestCase
{

    /**
     * @expectedException PropertyDoesNotExistsException;
     */
    public function testThrowExceptionOnGetterTest()
    {
        $this->expectException(PropertyDoesNotExistsException::class);

        $magic = new MagicGetterSetter;
        $getter = $magic->keys;
    }

    /**
     * @expectedException PropertyDoesNotExistsException;
     */
    public function testThrowExceptionOnSetterTest()
    {
        $this->expectException(PropertyDoesNotExistsException::class);

        $magic = new MagicGetterSetter;
        $magic->keys = time();
    }

    public function testGetterSetterTest()
    {
        $time = time();

        $magic = new MagicGetterSetter;
        $this->assertEquals($magic->key, 'key');
        $magic->key = $time;

        $this->assertEquals($magic->key, $time);
    }
}
