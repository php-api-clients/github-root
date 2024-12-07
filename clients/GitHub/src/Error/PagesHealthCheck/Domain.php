<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\PagesHealthCheck;

use Error;

final class Domain extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\PagesHealthCheck\Domain $error)
    {
    }
}
