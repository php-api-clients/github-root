<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Git\CreateCommit\Request;

use ApiClients\Client\GitHub\Schema\Git\CreateCommit\Request\ApplicationJson\Author;
use ApiClients\Client\GitHub\Schema\Git\CreateCommit\Request\ApplicationJson\Committer;

/**
 * @property string $message
 * @property string $tree
 * @property ?array $parents
 * @property ?Author $author
 * @property ?Committer $committer
 * @property ?string $signature
 */
interface ApplicationJson
{
}
