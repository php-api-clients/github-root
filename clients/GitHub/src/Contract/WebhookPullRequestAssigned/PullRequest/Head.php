<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestAssigned\PullRequest;

/**
 * @property ?string $label
 * @property string $ref
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPullRequestAssigned\PullRequest\Head\Repo $repo
 * @property string $sha
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPullRequestAssigned\PullRequest\Head\User $user
 */
interface Head
{
}
