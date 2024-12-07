<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RepositoryRulesetConditions;

use Error;

final class RefName extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryRulesetConditions\RefName $error)
    {
    }
}
