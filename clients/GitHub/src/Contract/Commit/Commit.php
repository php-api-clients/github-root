<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Commit;

use ApiClients\Client\GitHub\Schema\Commit\Commit\Tree;
use ApiClients\Client\GitHub\Schema\GitUser;
use ApiClients\Client\GitHub\Schema\Verification;

/**
 * @property string $url
 * @property ?GitUser $author
 * @property ?GitUser $committer
 * @property string $message
 * @property int $commentCount
 * @property Tree $tree
 * @property ?Verification $verification
 */
interface Commit
{
}
