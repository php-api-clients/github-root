<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\CommitSearchResultItem\Commit;
use ApiClients\Client\GitHub\Schema\GitUser;
use ApiClients\Client\GitHub\Schema\MinimalRepository;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $url
 * @property string $sha
 * @property string $htmlUrl
 * @property string $commentsUrl
 * @property Commit $commit
 * @property ?SimpleUser $author
 * @property ?GitUser $committer
 * @property array $parents
 * @property MinimalRepository $repository
 * @property int|float $score
 * @property string $nodeId
 * @property ?array $textMatches
 */
interface CommitSearchResultItem
{
}
