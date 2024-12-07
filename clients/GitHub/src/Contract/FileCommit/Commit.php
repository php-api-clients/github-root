<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\FileCommit;

use ApiClients\Client\GitHub\Schema\FileCommit\Commit\Author;
use ApiClients\Client\GitHub\Schema\FileCommit\Commit\Committer;
use ApiClients\Client\GitHub\Schema\FileCommit\Commit\Tree;
use ApiClients\Client\GitHub\Schema\FileCommit\Commit\Verification;

/**
 * @property ?string $sha
 * @property ?string $nodeId
 * @property ?string $url
 * @property ?string $htmlUrl
 * @property ?Author $author
 * @property ?Committer $committer
 * @property ?string $message
 * @property ?Tree $tree
 * @property ?array $parents
 * @property ?Verification $verification
 */
interface Commit
{
}
