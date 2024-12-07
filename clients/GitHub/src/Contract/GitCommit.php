<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $sha
 * @property string $nodeId
 * @property string $url
 * @property \ApiClients\Client\GitHub\Schema\GitCommit\Author $author
 * @property \ApiClients\Client\GitHub\Schema\GitCommit\Committer $committer
 * @property string $message
 * @property \ApiClients\Client\GitHub\Schema\GitCommit\Tree $tree
 * @property array $parents
 * @property \ApiClients\Client\GitHub\Schema\GitCommit\Verification $verification
 * @property string $htmlUrl
 */
interface GitCommit
{
}
