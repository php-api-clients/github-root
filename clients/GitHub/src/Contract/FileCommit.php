<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\FileCommit\Commit;
use ApiClients\Client\GitHub\Schema\FileCommit\Content;

/**
 * @property ?Content $content
 * @property Commit $commit
 */
interface FileCommit
{
}
