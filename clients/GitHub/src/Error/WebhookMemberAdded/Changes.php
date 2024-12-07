<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookMemberAdded;

use Error;

final class Changes extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookMemberAdded\Changes $error)
    {
    }
}
