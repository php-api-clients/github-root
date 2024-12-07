<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookPullRequestReviewThreadResolved;

use Error;

final class Thread extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewThreadResolved\Thread $error)
    {
    }
}
