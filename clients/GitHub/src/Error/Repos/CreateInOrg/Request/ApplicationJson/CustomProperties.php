<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Repos\CreateInOrg\Request\ApplicationJson;

use Error;

final class CustomProperties extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Repos\CreateInOrg\Request\ApplicationJson\CustomProperties $error)
    {
    }
}
