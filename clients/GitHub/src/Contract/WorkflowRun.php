<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\MinimalRepository;
use ApiClients\Client\GitHub\Schema\SimpleCommit;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property ?string $name
 * @property string $nodeId
 * @property ?int $checkSuiteId
 * @property ?string $checkSuiteNodeId
 * @property ?string $headBranch
 * @property string $headSha
 * @property string $path
 * @property int $runNumber
 * @property ?int $runAttempt
 * @property ?array $referencedWorkflows
 * @property string $event
 * @property ?string $status
 * @property ?string $conclusion
 * @property int $workflowId
 * @property string $url
 * @property string $htmlUrl
 * @property ?array $pullRequests
 * @property string $createdAt
 * @property string $updatedAt
 * @property ?SimpleUser $actor
 * @property ?SimpleUser $triggeringActor
 * @property ?string $runStartedAt
 * @property string $jobsUrl
 * @property string $logsUrl
 * @property string $checkSuiteUrl
 * @property string $artifactsUrl
 * @property string $cancelUrl
 * @property string $rerunUrl
 * @property ?string $previousAttemptUrl
 * @property string $workflowUrl
 * @property ?SimpleCommit $headCommit
 * @property MinimalRepository $repository
 * @property MinimalRepository $headRepository
 * @property ?int $headRepositoryId
 * @property string $displayTitle
 */
interface WorkflowRun
{
}
