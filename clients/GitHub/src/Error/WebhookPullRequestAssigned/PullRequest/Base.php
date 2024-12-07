<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookPullRequestAssigned\PullRequest;

final class Base extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPullRequestAssigned\PullRequest\Base $error)
    {
    }
}
