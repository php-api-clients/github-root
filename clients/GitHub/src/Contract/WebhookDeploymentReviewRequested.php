<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $action
 * @property ?\ApiClients\Client\GitHub\Schema\EnterpriseWebhooks $enterprise
 * @property string $environment
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleInstallation $installation
 * @property \ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property \ApiClients\Client\GitHub\Schema\RepositoryWebhooks $repository
 * @property ?\ApiClients\Client\GitHub\Schema\WebhooksUser $requestor
 * @property array $reviewers
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $sender
 * @property string $since
 * @property \ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewRequested\WorkflowJobRun $workflowJobRun
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewRequested\WorkflowRun $workflowRun
 */
interface WebhookDeploymentReviewRequested
{
}
