<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestAutoMergeDisabled\PullRequest;

use ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Base\Repo;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeDisabled\PullRequest\Base\User;

/**
 * @property string $label
 * @property string $ref
 * @property Repo $repo
 * @property string $sha
 * @property ?User $user
 */
interface Base
{
}
