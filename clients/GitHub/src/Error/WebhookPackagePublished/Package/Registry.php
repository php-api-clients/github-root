<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookPackagePublished\Package;

use Error;

final class Registry extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPackagePublished\Package\Registry $error)
    {
    }
}
