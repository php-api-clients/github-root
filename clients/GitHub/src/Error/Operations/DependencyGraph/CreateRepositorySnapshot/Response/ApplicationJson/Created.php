<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\DependencyGraph\CreateRepositorySnapshot\Response\ApplicationJson;

use Error;

final class Created extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Operations\DependencyGraph\CreateRepositorySnapshot\Response\ApplicationJson\Created $error)
    {
    }
}
