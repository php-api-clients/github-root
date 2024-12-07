<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookInstallationRepositoriesAdded;

use Error;

final class RepositoriesRemoved extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookInstallationRepositoriesAdded\RepositoriesRemoved $error)
    {
    }
}
