<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookPackagePublished\Package\PackageVersion\NugetMetadata\Value;

use Error;

final class Three extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\NugetMetadata\Value\Three $error)
    {
    }
}
