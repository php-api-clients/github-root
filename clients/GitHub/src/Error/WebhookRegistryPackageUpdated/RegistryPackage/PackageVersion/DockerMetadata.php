<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion;

use Error;

final class DockerMetadata extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRegistryPackageUpdated\RegistryPackage\PackageVersion\DockerMetadata $error)
    {
    }
}
