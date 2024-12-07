<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhooksIssueComment;

use Error;

final class User extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksIssueComment\User $error)
    {
    }
}
