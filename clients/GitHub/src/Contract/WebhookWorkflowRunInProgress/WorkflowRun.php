<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookWorkflowRunInProgress;

use ApiClients\Client\GitHub\Schema\WebhookWorkflowRunInProgress\WorkflowRun\Actor;
use ApiClients\Client\GitHub\Schema\WebhookWorkflowRunInProgress\WorkflowRun\HeadCommit;
use ApiClients\Client\GitHub\Schema\WebhookWorkflowRunInProgress\WorkflowRun\HeadRepository;
use ApiClients\Client\GitHub\Schema\WebhookWorkflowRunInProgress\WorkflowRun\Repository;
use ApiClients\Client\GitHub\Schema\WebhookWorkflowRunInProgress\WorkflowRun\TriggeringActor;

/**
 * @property ?Actor $actor
 * @property string $artifactsUrl
 * @property string $cancelUrl
 * @property int $checkSuiteId
 * @property string $checkSuiteNodeId
 * @property string $checkSuiteUrl
 * @property ?string $conclusion
 * @property string $createdAt
 * @property string $event
 * @property ?string $headBranch
 * @property HeadCommit $headCommit
 * @property HeadRepository $headRepository
 * @property string $headSha
 * @property string $htmlUrl
 * @property int $id
 * @property string $jobsUrl
 * @property string $logsUrl
 * @property ?string $name
 * @property string $nodeId
 * @property string $path
 * @property ?string $previousAttemptUrl
 * @property array $pullRequests
 * @property ?array $referencedWorkflows
 * @property Repository $repository
 * @property string $rerunUrl
 * @property int $runAttempt
 * @property int $runNumber
 * @property string $runStartedAt
 * @property string $status
 * @property ?TriggeringActor $triggeringActor
 * @property string $updatedAt
 * @property string $url
 * @property int $workflowId
 * @property string $workflowUrl
 */
interface WorkflowRun
{
}
