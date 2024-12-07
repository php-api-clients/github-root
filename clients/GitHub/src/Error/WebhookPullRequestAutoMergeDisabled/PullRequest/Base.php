<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookPullRequestAutoMergeDisabled\PullRequest;

use Error;

final class Base extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Base $error)
    {
    }
}
