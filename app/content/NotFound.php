<?php

declare(strict_types=1);

namespace elektrodancer\test;

class NotFound implements Content
{
    public function getContent(): string
    {
        return 'Content not found.';
    }
}
