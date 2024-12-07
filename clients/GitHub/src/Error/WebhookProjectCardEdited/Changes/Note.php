<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookProjectCardEdited\Changes;

use Error;

final class Note extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookProjectCardEdited\Changes\Note $error)
    {
    }
}
