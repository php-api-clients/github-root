<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestReviewThreadResolved\PullRequest;

use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewThreadResolved\PullRequest\Head\Repo;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewThreadResolved\PullRequest\Head\User;

/**
 * @property ?string $label
 * @property string $ref
 * @property ?Repo $repo
 * @property string $sha
 * @property ?User $user
 */
interface Head
{
}
