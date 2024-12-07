<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $url
 * @property string $sha
 * @property string $htmlUrl
 * @property string $commentsUrl
 * @property \ApiClients\Client\GitHub\Schema\CommitSearchResultItem\Commit $commit
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $author
 * @property ?\ApiClients\Client\GitHub\Schema\GitUser $committer
 * @property array $parents
 * @property \ApiClients\Client\GitHub\Schema\MinimalRepository $repository
 * @property int|float $score
 * @property string $nodeId
 * @property ?array $textMatches
 */
interface CommitSearchResultItem
{
}
