<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookRepositoryEdited\Changes;

use Error;

final class Topics extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited\Changes\Topics $error)
    {
    }
}
