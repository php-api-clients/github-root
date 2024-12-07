<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookRepositoryTransferred\Changes\Owner\From;

use Error;

final class Organization extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRepositoryTransferred\Changes\Owner\From\Organization $error)
    {
    }
}
