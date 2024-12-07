<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RateLimitOverview;

use Error;

final class Resources extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RateLimitOverview\Resources $error)
    {
    }
}
