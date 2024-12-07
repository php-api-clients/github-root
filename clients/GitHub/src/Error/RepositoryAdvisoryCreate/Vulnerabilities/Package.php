<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RepositoryAdvisoryCreate\Vulnerabilities;

use Error;

final class Package extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryAdvisoryCreate\Vulnerabilities\Package $error)
    {
    }
}
