<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RepositoryAdvisoryCreate;

use Error;

final class Vulnerabilities extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryAdvisoryCreate\Vulnerabilities $error)
    {
    }
}
