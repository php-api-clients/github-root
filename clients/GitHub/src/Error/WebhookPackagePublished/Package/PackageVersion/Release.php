<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookPackagePublished\Package\PackageVersion;

use Error;

final class Release extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\PackageVersion\Release $error)
    {
    }
}
