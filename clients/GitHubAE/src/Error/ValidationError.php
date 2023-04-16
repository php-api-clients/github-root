<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Error;

use ApiClients\Client\GitHubAE\Schema;
use Error;

final class ValidationError extends Error
{
    public function __construct(public int $status, public Schema\ValidationError $error)
    {
    }
}
