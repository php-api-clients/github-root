<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property int $runId
 * @property string $runUrl
 * @property ?int $runAttempt
 * @property string $nodeId
 * @property string $headSha
 * @property string $url
 * @property ?string $htmlUrl
 * @property string $status
 * @property ?string $conclusion
 * @property string $createdAt
 * @property string $startedAt
 * @property ?string $completedAt
 * @property string $name
 * @property ?array $steps
 * @property string $checkRunUrl
 * @property array $labels
 * @property ?int $runnerId
 * @property ?string $runnerName
 * @property ?int $runnerGroupId
 * @property ?string $runnerGroupName
 * @property ?string $workflowName
 * @property ?string $headBranch
 */
interface Job
{
}
