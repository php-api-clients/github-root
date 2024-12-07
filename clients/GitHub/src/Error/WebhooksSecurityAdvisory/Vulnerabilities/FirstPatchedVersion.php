<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhooksSecurityAdvisory\Vulnerabilities;

use Error;

final class FirstPatchedVersion extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksSecurityAdvisory\Vulnerabilities\FirstPatchedVersion $error)
    {
    }
}
