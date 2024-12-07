<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookMemberEdited;

use Error;

final class Changes extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookMemberEdited\Changes $error)
    {
    }
}
