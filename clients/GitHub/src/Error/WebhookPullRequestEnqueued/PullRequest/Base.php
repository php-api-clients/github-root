<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookPullRequestEnqueued\PullRequest;

use Error;

final class Base extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPullRequestEnqueued\PullRequest\Base $error)
    {
    }
}
