<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookPullRequestReviewThreadResolved\Thread;

use Error;

final class Comments extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewThreadResolved\Thread\Comments $error)
    {
    }
}
