<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookWorkflowJobCompleted;

/**
 * @property ?string $checkRunUrl
 * @property ?string $completedAt
 * @property string $conclusion
 * @property ?string $createdAt
 * @property ?string $headSha
 * @property ?string $htmlUrl
 * @property ?int $id
 * @property ?array $labels
 * @property ?string $name
 * @property ?string $nodeId
 * @property ?int $runAttempt
 * @property ?int $runId
 * @property ?string $runUrl
 * @property null|int|float $runnerGroupId
 * @property ?string $runnerGroupName
 * @property null|int|float $runnerId
 * @property ?string $runnerName
 * @property ?string $startedAt
 * @property ?string $status
 * @property ?string $headBranch
 * @property ?string $workflowName
 * @property ?array $steps
 * @property ?string $url
 */
interface WorkflowJob
{
}
