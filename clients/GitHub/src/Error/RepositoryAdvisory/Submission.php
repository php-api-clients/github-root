<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RepositoryAdvisory;

use Error;

final class Submission extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryAdvisory\Submission $error)
    {
    }
}
