<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $action
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\CheckRun $checkRun
 * @property \ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\Deployment $deployment
 * @property \ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\DeploymentStatus $deploymentStatus
 * @property ?\ApiClients\Client\GitHub\Schema\EnterpriseWebhooks $enterprise
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleInstallation $installation
 * @property ?\ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property \ApiClients\Client\GitHub\Schema\RepositoryWebhooks $repository
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $sender
 * @property ?\ApiClients\Client\GitHub\Schema\WebhooksWorkflow $workflow
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated\WorkflowRun $workflowRun
 */
interface WebhookDeploymentStatusCreated
{
}
