<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookWorkflowJobWaiting;

/**
 * @property string $checkRunUrl
 * @property ?string $completedAt
 * @property ?string $conclusion
 * @property string $createdAt
 * @property string $headSha
 * @property string $htmlUrl
 * @property int $id
 * @property array $labels
 * @property string $name
 * @property string $nodeId
 * @property int $runAttempt
 * @property int|float $runId
 * @property string $runUrl
 * @property ?int $runnerGroupId
 * @property ?string $runnerGroupName
 * @property ?int $runnerId
 * @property ?string $runnerName
 * @property string $startedAt
 * @property ?string $headBranch
 * @property ?string $workflowName
 * @property string $status
 * @property array $steps
 * @property string $url
 */
interface WorkflowJob
{
}
