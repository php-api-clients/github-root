<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\MinimalRepository;
use ApiClients\Client\GitHub\Schema\SimpleCommit;

/**
 * @property int $id
 * @property string $nodeId
 * @property ?string $headBranch
 * @property string $headSha
 * @property ?string $status
 * @property ?string $conclusion
 * @property ?string $url
 * @property ?string $before
 * @property ?string $after
 * @property ?array $pullRequests
 * @property ?Integration $app
 * @property MinimalRepository $repository
 * @property ?string $createdAt
 * @property ?string $updatedAt
 * @property SimpleCommit $headCommit
 * @property int $latestCheckRunsCount
 * @property string $checkRunsUrl
 * @property ?bool $rerequestable
 * @property ?bool $runsRerequestable
 */
interface CheckSuite
{
}
