<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Environment\ProtectionRules;

use Error;

final class Two extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\Environment\ProtectionRules\Two $error)
    {
    }
}
