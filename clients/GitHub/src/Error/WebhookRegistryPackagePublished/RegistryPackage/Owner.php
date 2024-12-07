<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookRegistryPackagePublished\RegistryPackage;

use Error;

final class Owner extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRegistryPackagePublished\RegistryPackage\Owner $error)
    {
    }
}
