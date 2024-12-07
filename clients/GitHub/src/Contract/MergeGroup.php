<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleCommit;

/**
 * @property string $headSha
 * @property string $headRef
 * @property string $baseSha
 * @property string $baseRef
 * @property SimpleCommit $headCommit
 */
interface MergeGroup
{
}
