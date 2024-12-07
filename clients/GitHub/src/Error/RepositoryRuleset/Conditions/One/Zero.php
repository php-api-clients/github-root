<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RepositoryRuleset\Conditions\One;

use Error;

final class Zero extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryRuleset\Conditions\One\Zero $error)
    {
    }
}
