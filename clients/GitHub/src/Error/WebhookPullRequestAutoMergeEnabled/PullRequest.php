<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\WebhookPullRequestAutoMergeEnabled;

final class PullRequest extends \Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeEnabled\PullRequest $error)
    {
    }
}
