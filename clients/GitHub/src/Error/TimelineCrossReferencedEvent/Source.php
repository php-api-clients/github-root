<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\TimelineCrossReferencedEvent;

use Error;

final class Source extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\TimelineCrossReferencedEvent\Source $error)
    {
    }
}
