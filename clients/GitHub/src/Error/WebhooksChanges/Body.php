<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhooksChanges;

use Error;

final class Body extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksChanges\Body $error)
    {
    }
}
