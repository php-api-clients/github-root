<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RepositoryRuleViolationError;

use Error;

final class Metadata extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryRuleViolationError\Metadata $error)
    {
    }
}
