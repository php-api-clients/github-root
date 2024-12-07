<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Commit;

use Error;

final class Stats extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Commit\Stats $error)
    {
    }
}
