<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookPullRequestReviewEdited;

use Error;

final class PullRequest extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewEdited\PullRequest $error)
    {
    }
}
