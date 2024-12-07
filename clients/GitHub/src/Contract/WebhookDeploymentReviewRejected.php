<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewRejected\WorkflowRun;
use ApiClients\Client\GitHub\Schema\WebhooksApprover;
use ApiClients\Client\GitHub\Schema\WebhooksWorkflowJobRun;

/**
 * @property string $action
 * @property ?WebhooksApprover $approver
 * @property ?string $comment
 * @property ?EnterpriseWebhooks $enterprise
 * @property ?SimpleInstallation $installation
 * @property OrganizationSimpleWebhooks $organization
 * @property RepositoryWebhooks $repository
 * @property ?array $reviewers
 * @property SimpleUser $sender
 * @property string $since
 * @property ?WebhooksWorkflowJobRun $workflowJobRun
 * @property ?array $workflowJobRuns
 * @property ?WorkflowRun $workflowRun
 */
interface WebhookDeploymentReviewRejected
{
}
