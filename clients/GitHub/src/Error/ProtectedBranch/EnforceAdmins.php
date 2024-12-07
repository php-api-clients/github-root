<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\ProtectedBranch;

use Error;

final class EnforceAdmins extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ProtectedBranch\EnforceAdmins $error)
    {
    }
}
