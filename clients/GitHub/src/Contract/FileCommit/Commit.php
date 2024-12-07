<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\FileCommit;

/**
 * @property ?string $sha
 * @property ?string $nodeId
 * @property ?string $url
 * @property ?string $htmlUrl
 * @property ?\ApiClients\Client\GitHub\Schema\FileCommit\Commit\Author $author
 * @property ?\ApiClients\Client\GitHub\Schema\FileCommit\Commit\Committer $committer
 * @property ?string $message
 * @property ?\ApiClients\Client\GitHub\Schema\FileCommit\Commit\Tree $tree
 * @property ?array $parents
 * @property ?\ApiClients\Client\GitHub\Schema\FileCommit\Commit\Verification $verification
 */
interface Commit
{
}
