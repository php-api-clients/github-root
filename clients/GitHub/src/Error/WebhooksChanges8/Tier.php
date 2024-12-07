<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhooksChanges8;

use Error;

final class Tier extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksChanges8\Tier $error)
    {
    }
}
