<?php

declare(strict_types=1);

namespace elektrodancer\test;

class HelloWorld implements Content
{
    public function getContent(): string
    {
        return 'Hello World';
    }
}
