<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleCommit\Author;
use ApiClients\Client\GitHub\Schema\SimpleCommit\Committer;

/**
 * @property string $id
 * @property string $treeId
 * @property string $message
 * @property string $timestamp
 * @property ?Author $author
 * @property ?Committer $committer
 */
interface SimpleCommit
{
}
