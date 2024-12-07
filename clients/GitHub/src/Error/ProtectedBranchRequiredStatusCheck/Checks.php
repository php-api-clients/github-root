<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\ProtectedBranchRequiredStatusCheck;

use Error;

final class Checks extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck\Checks $error)
    {
    }
}
