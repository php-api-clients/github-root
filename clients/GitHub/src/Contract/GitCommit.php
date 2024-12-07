<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\GitCommit\Author;
use ApiClients\Client\GitHub\Schema\GitCommit\Committer;
use ApiClients\Client\GitHub\Schema\GitCommit\Tree;
use ApiClients\Client\GitHub\Schema\GitCommit\Verification;

/**
 * @property string $sha
 * @property string $nodeId
 * @property string $url
 * @property Author $author
 * @property Committer $committer
 * @property string $message
 * @property Tree $tree
 * @property array $parents
 * @property Verification $verification
 * @property string $htmlUrl
 */
interface GitCommit
{
}
