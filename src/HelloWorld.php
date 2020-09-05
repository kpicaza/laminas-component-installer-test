<?php

declare(strict_types=1);

namespace Dummy;

class HelloWorld
{
    private const MESSAGE = 'Hello World!';

    public function __invoke(): string
    {
        return self::MESSAGE;
    }
}
