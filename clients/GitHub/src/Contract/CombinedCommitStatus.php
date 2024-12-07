<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $state
 * @property array $statuses
 * @property string $sha
 * @property int $totalCount
 * @property \ApiClients\Client\GitHub\Schema\MinimalRepository $repository
 * @property string $commitUrl
 * @property string $url
 */
interface CombinedCommitStatus
{
}
