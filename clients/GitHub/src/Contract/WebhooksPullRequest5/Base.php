<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhooksPullRequest5;

use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Base\Repo;
use ApiClients\Client\GitHub\Schema\WebhooksPullRequest5\Base\User;

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
