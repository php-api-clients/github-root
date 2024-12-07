<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookProjectCardMoved\Changes;

use Error;

final class ColumnId extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookProjectCardMoved\Changes\ColumnId $error)
    {
    }
}
