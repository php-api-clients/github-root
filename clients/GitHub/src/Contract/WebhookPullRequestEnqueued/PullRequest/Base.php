<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestEnqueued\PullRequest;

use ApiClients\Client\GitHub\Schema\WebhookPullRequestEnqueued\PullRequest\Base\Repo;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestEnqueued\PullRequest\Base\User;

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
