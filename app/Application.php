<?php

declare(strict_types=1);

namespace elektrodancer\test;

class Application
{
    private Router $router;
    private PHPVariablesWrapper $variablesWrapper;

    public function __construct(Router $router, PHPVariablesWrapper $variablesWrapper)
    {
        $this->router = $router;
        $this->variablesWrapper = $variablesWrapper;
    }

    public function run(): string
    {
        return $this->router->getContentForURL(
            $this->variablesWrapper->getRequestUri()
        )->getContent();
    }
}
