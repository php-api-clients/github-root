<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\BranchProtection;

use Error;

final class LockBranch extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\BranchProtection\LockBranch $error)
    {
    }
}
