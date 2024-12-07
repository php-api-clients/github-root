<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\RepositoryRuleViolationError\Metadata;

use Error;

final class SecretScanning extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\RepositoryRuleViolationError\Metadata\SecretScanning $error)
    {
    }
}
