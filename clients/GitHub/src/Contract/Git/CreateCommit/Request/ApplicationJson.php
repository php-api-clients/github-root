<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\Git\CreateCommit\Request;

/**
 * @property string $message
 * @property string $tree
 * @property ?array $parents
 * @property ?\ApiClients\Client\GitHub\Schema\Git\CreateCommit\Request\ApplicationJson\Author $author
 * @property ?\ApiClients\Client\GitHub\Schema\Git\CreateCommit\Request\ApplicationJson\Committer $committer
 * @property ?string $signature
 */
interface ApplicationJson
{
}
