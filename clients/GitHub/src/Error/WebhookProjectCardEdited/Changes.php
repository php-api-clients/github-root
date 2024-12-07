<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookProjectCardEdited;

use Error;

final class Changes extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookProjectCardEdited\Changes $error)
    {
    }
}
