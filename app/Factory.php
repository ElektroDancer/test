<?php

declare(strict_types=1);

namespace elektrodancer\test;

class Factory
{
    public function createApplication(): Application
    {
        return new Application(
            $this->createRouter(),
            $this->createPHPVariablesWrapper()
        );
    }

    private function createRouter(): Router
    {
        return new Router(
            $this->createHelloWorld(),
            $this->createNotFound()
        );
    }

    private function createPHPVariablesWrapper(): PHPVariablesWrapper
    {
        return new PHPVariablesWrapper();
    }


    private function createHelloWorld(): HelloWorld
    {
        return new HelloWorld();
    }
    
    private function createNotFound(): NotFound
    {
        return new NotFound();
    }
}
