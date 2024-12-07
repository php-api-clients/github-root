<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\CheckRun;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\Deployment;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\DeploymentStatus;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\WorkflowRun;
use ApiClients\Client\GitHub\Schema\WebhooksWorkflow;

/**
 * @property string $action
 * @property ?CheckRun $checkRun
 * @property Deployment $deployment
 * @property DeploymentStatus $deploymentStatus
 * @property ?EnterpriseWebhooks $enterprise
 * @property ?SimpleInstallation $installation
 * @property ?OrganizationSimpleWebhooks $organization
 * @property RepositoryWebhooks $repository
 * @property SimpleUser $sender
 * @property ?WebhooksWorkflow $workflow
 * @property ?WorkflowRun $workflowRun
 */
interface WebhookDeploymentStatusCreated
{
}
