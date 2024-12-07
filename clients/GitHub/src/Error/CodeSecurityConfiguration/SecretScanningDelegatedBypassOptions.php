<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\CodeSecurityConfiguration;

use Error;

final class SecretScanningDelegatedBypassOptions extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration\SecretScanningDelegatedBypassOptions $error)
    {
    }
}
