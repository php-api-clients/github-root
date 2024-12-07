<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Gists\Update\Request\ApplicationJson;

use Error;

final class Files extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Gists\Update\Request\ApplicationJson\Files $error)
    {
    }
}
