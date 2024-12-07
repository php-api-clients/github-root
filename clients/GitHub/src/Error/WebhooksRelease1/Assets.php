<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhooksRelease1;

use Error;

final class Assets extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksRelease1\Assets $error)
    {
    }
}
