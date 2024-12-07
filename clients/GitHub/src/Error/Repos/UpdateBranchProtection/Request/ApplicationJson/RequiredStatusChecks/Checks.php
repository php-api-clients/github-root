<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredStatusChecks;

use Error;

final class Checks extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredStatusChecks\Checks $error)
    {
    }
}
