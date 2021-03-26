<?php

declare(strict_types=1);

namespace elektrodancer\test;

use RuntimeException;

class PHPVariablesWrapper
{
    public function getRequestUri(): string
    {
        if (array_key_exists('REQUEST_URI', $_SERVER)) {
            return $_SERVER['REQUEST_URI'];
        }

        throw new RuntimeException('"REQUEST_URI" could not be found');
    }
}
