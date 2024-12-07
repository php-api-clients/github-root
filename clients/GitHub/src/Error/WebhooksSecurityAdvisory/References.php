<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhooksSecurityAdvisory;

use Error;

final class References extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksSecurityAdvisory\References $error)
    {
    }
}
