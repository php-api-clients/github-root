<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\CommitSearchResultItem;

use ApiClients\Client\GitHub\Schema\CommitSearchResultItem\Commit\Author;
use ApiClients\Client\GitHub\Schema\CommitSearchResultItem\Commit\Tree;
use ApiClients\Client\GitHub\Schema\GitUser;
use ApiClients\Client\GitHub\Schema\Verification;

/**
 * @property Author $author
 * @property ?GitUser $committer
 * @property int $commentCount
 * @property string $message
 * @property Tree $tree
 * @property string $url
 * @property ?Verification $verification
 */
interface Commit
{
}
