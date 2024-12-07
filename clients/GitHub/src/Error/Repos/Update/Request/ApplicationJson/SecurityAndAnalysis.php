<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Repos\Update\Request\ApplicationJson;

use Error;

final class SecurityAndAnalysis extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Repos\Update\Request\ApplicationJson\SecurityAndAnalysis $error)
    {
    }
}
