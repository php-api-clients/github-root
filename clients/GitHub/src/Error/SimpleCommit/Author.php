<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\SimpleCommit;

use Error;

final class Author extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\SimpleCommit\Author $error)
    {
    }
}
