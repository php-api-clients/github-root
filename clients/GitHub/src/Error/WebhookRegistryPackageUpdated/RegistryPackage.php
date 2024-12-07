<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookRegistryPackageUpdated;

use Error;

final class RegistryPackage extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRegistryPackageUpdated\RegistryPackage $error)
    {
    }
}
