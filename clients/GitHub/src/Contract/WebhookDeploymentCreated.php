<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\Deployment;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentCreated\WorkflowRun;
use ApiClients\Client\GitHub\Schema\WebhooksWorkflow;

/**
 * @property string $action
 * @property Deployment $deployment
 * @property ?EnterpriseWebhooks $enterprise
 * @property ?SimpleInstallation $installation
 * @property ?OrganizationSimpleWebhooks $organization
 * @property RepositoryWebhooks $repository
 * @property SimpleUser $sender
 * @property ?WebhooksWorkflow $workflow
 * @property ?WorkflowRun $workflowRun
 */
interface WebhookDeploymentCreated
{
}
