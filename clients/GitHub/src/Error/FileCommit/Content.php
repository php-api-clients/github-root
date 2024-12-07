<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\FileCommit;

use Error;

final class Content extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\FileCommit\Content $error)
    {
    }
}
