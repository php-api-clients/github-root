<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\Commit;

/**
 * @property string $url
 * @property ?\ApiClients\Client\GitHub\Schema\GitUser $author
 * @property ?\ApiClients\Client\GitHub\Schema\GitUser $committer
 * @property string $message
 * @property int $commentCount
 * @property \ApiClients\Client\GitHub\Schema\Commit\Commit\Tree $tree
 * @property ?\ApiClients\Client\GitHub\Schema\Verification $verification
 */
interface Commit
{
}
