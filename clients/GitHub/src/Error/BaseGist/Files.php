<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\BaseGist;

use Error;

final class Files extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\BaseGist\Files $error)
    {
    }
}
