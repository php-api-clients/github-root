<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $headSha
 * @property string $headRef
 * @property string $baseSha
 * @property string $baseRef
 * @property \ApiClients\Client\GitHub\Schema\SimpleCommit $headCommit
 */
interface MergeGroup
{
}
