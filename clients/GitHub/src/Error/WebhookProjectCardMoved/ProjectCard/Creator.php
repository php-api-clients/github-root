<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookProjectCardMoved\ProjectCard;

use Error;

final class Creator extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookProjectCardMoved\ProjectCard\Creator $error)
    {
    }
}
