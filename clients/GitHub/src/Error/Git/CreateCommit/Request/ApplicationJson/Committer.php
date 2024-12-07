<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Git\CreateCommit\Request\ApplicationJson;

use Error;

final class Committer extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Git\CreateCommit\Request\ApplicationJson\Committer $error)
    {
    }
}
