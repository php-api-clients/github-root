<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Repos\DeleteFile\Request\ApplicationJson;

use Error;

final class Committer extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Repos\DeleteFile\Request\ApplicationJson\Committer $error)
    {
    }
}
