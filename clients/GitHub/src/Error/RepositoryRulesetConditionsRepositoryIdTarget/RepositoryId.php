<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RepositoryRulesetConditionsRepositoryIdTarget;

use Error;

final class RepositoryId extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryRulesetConditionsRepositoryIdTarget\RepositoryId $error)
    {
    }
}
