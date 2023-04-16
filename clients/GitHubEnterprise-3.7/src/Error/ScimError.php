<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Error;

use ApiClients\Client\GitHubEnterprise\Schema;
use Error;

final class ScimError extends Error
{
    public function __construct(public int $status, public Schema\ScimError $error)
    {
    }
}
