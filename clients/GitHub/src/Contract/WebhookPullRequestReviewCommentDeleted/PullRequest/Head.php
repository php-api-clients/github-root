<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestReviewCommentDeleted\PullRequest;

use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewCommentDeleted\PullRequest\Head\Repo;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewCommentDeleted\PullRequest\Head\User;

/**
 * @property string $label
 * @property string $ref
 * @property ?Repo $repo
 * @property string $sha
 * @property ?User $user
 */
interface Head
{
}
