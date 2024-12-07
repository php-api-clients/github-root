<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookRepositoryRenamed\Changes;

use Error;

final class Repository extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRepositoryRenamed\Changes\Repository $error)
    {
    }
}
