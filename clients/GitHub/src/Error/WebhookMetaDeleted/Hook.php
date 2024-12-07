<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookMetaDeleted;

use Error;

final class Hook extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookMetaDeleted\Hook $error)
    {
    }
}
