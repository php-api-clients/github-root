<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion;

use Error;

final class Release extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\Release $error)
    {
    }
}
