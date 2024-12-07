<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookPullRequestAssigned\PullRequest\Head;

use Error;

final class Repo extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPullRequestAssigned\PullRequest\Head\Repo $error)
    {
    }
}
