<?php

declare(strict_types=1);

namespace elektrodancer\test;

class Factory
{
    public function createHelloWorld(): HelloWorld
    {
        return new HelloWorld();
    }
}
