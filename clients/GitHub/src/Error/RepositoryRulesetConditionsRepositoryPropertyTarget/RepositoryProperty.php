<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RepositoryRulesetConditionsRepositoryPropertyTarget;

use Error;

final class RepositoryProperty extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryRulesetConditionsRepositoryPropertyTarget\RepositoryProperty $error)
    {
    }
}
