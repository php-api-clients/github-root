<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata;

use Error;

final class Tag extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\ContainerMetadata\Tag $error)
    {
    }
}
