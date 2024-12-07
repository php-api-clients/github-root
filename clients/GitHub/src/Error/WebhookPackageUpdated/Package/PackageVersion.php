<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookPackageUpdated\Package;

use Error;

final class PackageVersion extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPackageUpdated\Package\PackageVersion $error)
    {
    }
}
