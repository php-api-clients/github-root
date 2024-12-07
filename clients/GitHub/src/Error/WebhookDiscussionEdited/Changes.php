<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookDiscussionEdited;

use Error;

final class Changes extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookDiscussionEdited\Changes $error)
    {
    }
}
