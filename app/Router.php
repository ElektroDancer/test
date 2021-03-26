<?php

declare(strict_types=1);

namespace elektrodancer\test;

class Router
{
    private HelloWorld $helloWorldContent;
    private NotFound $notFoundContent;

    public function __construct(HelloWorld $helloWorld, NotFound $notFound)
    {
        $this->helloWorldContent = $helloWorld;
        $this->notFoundContent = $notFound;
    }

    public function getContentForURL($url): Content
    {
        $url = strtolower($url);

        if ($url === '/') {
            return $this->helloWorldContent;
        }

        return $this->notFoundContent;
    }
}
