<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookPullRequestReviewThreadUnresolved\PullRequest;

use Error;

final class AutoMerge extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewThreadUnresolved\PullRequest\AutoMerge $error)
    {
    }
}
