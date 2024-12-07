<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $url
 * @property string $sha
 * @property string $nodeId
 * @property string $htmlUrl
 * @property string $commentsUrl
 * @property \ApiClients\Client\GitHub\Schema\Commit\Commit $commit
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser|\ApiClients\Client\GitHub\Schema\EmptyObject $author
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser|\ApiClients\Client\GitHub\Schema\EmptyObject $committer
 * @property array $parents
 * @property ?\ApiClients\Client\GitHub\Schema\Commit\Stats $stats
 * @property ?array $files
 */
interface Commit
{
}
