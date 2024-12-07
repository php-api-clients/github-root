<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RepositoryRuleset\Rules\Fifteen;

use Error;

final class Parameters extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules\Fifteen\Parameters $error)
    {
    }
}
