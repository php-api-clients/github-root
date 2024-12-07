<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\ApiOverview;

use Error;

final class SshKeyFingerprints extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\ApiOverview\SshKeyFingerprints $error)
    {
    }
}
