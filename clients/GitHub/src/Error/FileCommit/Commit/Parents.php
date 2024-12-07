<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\FileCommit\Commit;

use Error;

final class Parents extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\FileCommit\Commit\Parents $error)
    {
    }
}
