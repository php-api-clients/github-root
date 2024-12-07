<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestAutoMergeEnabled\PullRequest;

use ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeEnabled\PullRequest\Head\Repo;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeEnabled\PullRequest\Head\User;

/**
 * @property string $label
 * @property string $ref
 * @property Repo $repo
 * @property string $sha
 * @property ?User $user
 */
interface Head
{
}
