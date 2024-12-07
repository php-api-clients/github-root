<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookPullRequestUnassigned\PullRequest;

final class Base extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPullRequestUnassigned\PullRequest\Base $error)
    {
    }
}
