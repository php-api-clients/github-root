<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $action
 * @property ?\ApiClients\Client\GitHub\Schema\WebhooksApprover $approver
 * @property ?string $comment
 * @property ?\ApiClients\Client\GitHub\Schema\EnterpriseWebhooks $enterprise
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleInstallation $installation
 * @property \ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property \ApiClients\Client\GitHub\Schema\RepositoryWebhooks $repository
 * @property ?array $reviewers
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $sender
 * @property string $since
 * @property ?\ApiClients\Client\GitHub\Schema\WebhooksWorkflowJobRun $workflowJobRun
 * @property ?array $workflowJobRuns
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewApproved\WorkflowRun $workflowRun
 */
interface WebhookDeploymentReviewApproved
{
}
