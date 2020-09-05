<?php

namespace DummyTest;

use Dummy\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testItShouldShowHelloWorld(): void
    {
        $sut = new HelloWorld();

        $this->assertStringContainsString('Hello World!', $sut());
    }
}
