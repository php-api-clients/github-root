<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhooksPullRequest5\RequestedReviewers\One;

use Error;

final class Parent_ extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\RequestedReviewers\One\Parent_ $error)
    {
    }
}
