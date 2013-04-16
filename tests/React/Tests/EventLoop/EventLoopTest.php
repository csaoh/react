<?php

namespace React\Tests\EventLoop;

use React\EventLoop\EventLoop;

class EventLoopTest extends AbstractLoopTest
{
    public function createLoop()
    {

        return new EventLoop();
    }

    public function testLibEvConstructor()
    {
        $loop = new EventLoop();
    }
}
