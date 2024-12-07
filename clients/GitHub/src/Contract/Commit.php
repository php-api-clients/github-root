<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Commit\Stats;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $url
 * @property string $sha
 * @property string $nodeId
 * @property string $htmlUrl
 * @property string $commentsUrl
 * @property \ApiClients\Client\GitHub\Schema\Commit\Commit $commit
 * @property SimpleUser|EmptyObject $author
 * @property SimpleUser|EmptyObject $committer
 * @property array $parents
 * @property ?Stats $stats
 * @property ?array $files
 */
interface Commit
{
}
