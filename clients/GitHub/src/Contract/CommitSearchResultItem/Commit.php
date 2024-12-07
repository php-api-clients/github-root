<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\CommitSearchResultItem;

/**
 * @property \ApiClients\Client\GitHub\Schema\CommitSearchResultItem\Commit\Author $author
 * @property ?\ApiClients\Client\GitHub\Schema\GitUser $committer
 * @property int $commentCount
 * @property string $message
 * @property \ApiClients\Client\GitHub\Schema\CommitSearchResultItem\Commit\Tree $tree
 * @property string $url
 * @property ?\ApiClients\Client\GitHub\Schema\Verification $verification
 */
interface Commit
{
}
