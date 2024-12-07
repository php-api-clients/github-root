<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookIssueCommentCreated;

use Error;

final class Comment extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookIssueCommentCreated\Comment $error)
    {
    }
}
