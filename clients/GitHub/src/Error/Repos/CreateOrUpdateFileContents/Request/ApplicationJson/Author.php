<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Repos\CreateOrUpdateFileContents\Request\ApplicationJson;

use Error;

final class Author extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Repos\CreateOrUpdateFileContents\Request\ApplicationJson\Author $error)
    {
    }
}
