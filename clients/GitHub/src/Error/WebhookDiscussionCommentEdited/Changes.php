<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookDiscussionCommentEdited;

use Error;

final class Changes extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookDiscussionCommentEdited\Changes $error)
    {
    }
}
