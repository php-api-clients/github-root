<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookPullRequestReviewEdited\PullRequest;

final class Base extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewEdited\PullRequest\Base $error)
    {
    }
}
