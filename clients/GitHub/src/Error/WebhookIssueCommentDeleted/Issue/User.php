<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookIssueCommentDeleted\Issue;

use Error;

final class User extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookIssueCommentDeleted\Issue\User $error)
    {
    }
}
