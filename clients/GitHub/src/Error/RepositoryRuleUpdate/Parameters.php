<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RepositoryRuleUpdate;

use Error;

final class Parameters extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryRuleUpdate\Parameters $error)
    {
    }
}
