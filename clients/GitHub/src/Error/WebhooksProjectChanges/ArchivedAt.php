<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhooksProjectChanges;

use Error;

final class ArchivedAt extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksProjectChanges\ArchivedAt $error)
    {
    }
}
