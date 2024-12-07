<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewRequested\WorkflowJobRun;
use ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewRequested\WorkflowRun;
use ApiClients\Client\GitHub\Schema\WebhooksUser;

/**
 * @property string $action
 * @property ?EnterpriseWebhooks $enterprise
 * @property string $environment
 * @property ?SimpleInstallation $installation
 * @property OrganizationSimpleWebhooks $organization
 * @property RepositoryWebhooks $repository
 * @property ?WebhooksUser $requestor
 * @property array $reviewers
 * @property SimpleUser $sender
 * @property string $since
 * @property WorkflowJobRun $workflowJobRun
 * @property ?WorkflowRun $workflowRun
 */
interface WebhookDeploymentReviewRequested
{
}
