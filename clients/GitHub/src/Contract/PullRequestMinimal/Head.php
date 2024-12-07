<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\PullRequestMinimal;

use ApiClients\Client\GitHub\Schema\PullRequestMinimal\Head\Repo;

/**
 * @property string $ref
 * @property string $sha
 * @property Repo $repo
 */
interface Head
{
}
