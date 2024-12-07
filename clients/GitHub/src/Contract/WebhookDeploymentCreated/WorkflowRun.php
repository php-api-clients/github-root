<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookDeploymentCreated;

/**
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\WorkflowRun\Actor $actor
 * @property ?string $artifactsUrl
 * @property ?string $cancelUrl
 * @property int $checkSuiteId
 * @property string $checkSuiteNodeId
 * @property ?string $checkSuiteUrl
 * @property ?string $conclusion
 * @property string $createdAt
 * @property string $displayTitle
 * @property string $event
 * @property string $headBranch
 * @property string $headCommit
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\WorkflowRun\HeadRepository $headRepository
 * @property string $headSha
 * @property string $htmlUrl
 * @property int $id
 * @property ?string $jobsUrl
 * @property ?string $logsUrl
 * @property string $name
 * @property string $nodeId
 * @property string $path
 * @property string $previousAttemptUrl
 * @property array $pullRequests
 * @property ?array $referencedWorkflows
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\WorkflowRun\Repository $repository
 * @property ?string $rerunUrl
 * @property int $runAttempt
 * @property int $runNumber
 * @property string $runStartedAt
 * @property string $status
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\WorkflowRun\TriggeringActor $triggeringActor
 * @property string $updatedAt
 * @property string $url
 * @property int $workflowId
 * @property ?string $workflowUrl
 */
interface WorkflowRun
{
}
