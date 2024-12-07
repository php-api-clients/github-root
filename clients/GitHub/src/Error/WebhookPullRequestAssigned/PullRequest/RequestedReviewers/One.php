<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookPullRequestAssigned\PullRequest\RequestedReviewers;

final class One extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPullRequestAssigned\PullRequest\RequestedReviewers\One $error)
    {
    }
}
