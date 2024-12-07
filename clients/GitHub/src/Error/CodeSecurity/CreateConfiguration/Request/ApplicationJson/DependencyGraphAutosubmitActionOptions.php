<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\CodeSecurity\CreateConfiguration\Request\ApplicationJson;

use Error;

final class DependencyGraphAutosubmitActionOptions extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CodeSecurity\CreateConfiguration\Request\ApplicationJson\DependencyGraphAutosubmitActionOptions $error)
    {
    }
}
