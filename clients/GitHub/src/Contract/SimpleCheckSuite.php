<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\MinimalRepository;

/**
 * @property ?string $after
 * @property ?Integration $app
 * @property ?string $before
 * @property ?string $conclusion
 * @property ?string $createdAt
 * @property ?string $headBranch
 * @property ?string $headSha
 * @property ?int $id
 * @property ?string $nodeId
 * @property ?array $pullRequests
 * @property ?MinimalRepository $repository
 * @property ?string $status
 * @property ?string $updatedAt
 * @property ?string $url
 */
interface SimpleCheckSuite
{
}
