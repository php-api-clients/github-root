<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

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
 * @property ?\ApiClients\Client\GitHub\Schema\Integration $app
 * @property \ApiClients\Client\GitHub\Schema\MinimalRepository $repository
 * @property ?string $createdAt
 * @property ?string $updatedAt
 * @property \ApiClients\Client\GitHub\Schema\SimpleCommit $headCommit
 * @property int $latestCheckRunsCount
 * @property string $checkRunsUrl
 * @property ?bool $rerequestable
 * @property ?bool $runsRerequestable
 */
interface CheckSuite
{
}
