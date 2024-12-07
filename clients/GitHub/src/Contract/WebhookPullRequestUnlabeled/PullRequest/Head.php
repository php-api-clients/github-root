<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestUnlabeled\PullRequest;

/**
 * @property ?string $label
 * @property string $ref
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPullRequestUnlabeled\PullRequest\Head\Repo $repo
 * @property string $sha
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookPullRequestUnlabeled\PullRequest\Head\User $user
 */
interface Head
{
}
