<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookCustomPropertyDeleted;

use Error;

final class Definition extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookCustomPropertyDeleted\Definition $error)
    {
    }
}
