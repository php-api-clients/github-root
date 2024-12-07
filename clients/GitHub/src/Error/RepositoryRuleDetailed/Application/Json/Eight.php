<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RepositoryRuleDetailed\Application\Json;

use Error;

final class Eight extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryRuleDetailed\Application\Json\Eight $error)
    {
    }
}
