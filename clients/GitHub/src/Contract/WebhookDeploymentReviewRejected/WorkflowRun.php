<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookDeploymentReviewRejected;

/**
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewRejected\WorkflowRun\Actor $actor
 * @property ?string $artifactsUrl
 * @property ?string $cancelUrl
 * @property int $checkSuiteId
 * @property string $checkSuiteNodeId
 * @property ?string $checkSuiteUrl
 * @property ?string $conclusion
 * @property string $createdAt
 * @property string $event
 * @property string $headBranch
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewRejected\WorkflowRun\HeadCommit $headCommit
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewRejected\WorkflowRun\HeadRepository $headRepository
 * @property string $headSha
 * @property string $htmlUrl
 * @property int $id
 * @property ?string $jobsUrl
 * @property ?string $logsUrl
 * @property string $name
 * @property string $nodeId
 * @property string $path
 * @property ?string $previousAttemptUrl
 * @property array $pullRequests
 * @property ?array $referencedWorkflows
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewRejected\WorkflowRun\Repository $repository
 * @property ?string $rerunUrl
 * @property int $runAttempt
 * @property int $runNumber
 * @property string $runStartedAt
 * @property string $status
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewRejected\WorkflowRun\TriggeringActor $triggeringActor
 * @property string $updatedAt
 * @property string $url
 * @property int $workflowId
 * @property ?string $workflowUrl
 * @property string $displayTitle
 */
interface WorkflowRun
{
}
