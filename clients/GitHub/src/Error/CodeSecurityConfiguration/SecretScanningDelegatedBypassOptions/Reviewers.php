<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\CodeSecurityConfiguration\SecretScanningDelegatedBypassOptions;

use Error;

final class Reviewers extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration\SecretScanningDelegatedBypassOptions\Reviewers $error)
    {
    }
}
