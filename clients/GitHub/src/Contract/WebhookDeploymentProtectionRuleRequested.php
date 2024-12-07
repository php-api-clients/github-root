<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Deployment;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property ?string $action
 * @property ?string $environment
 * @property ?string $event
 * @property ?string $deploymentCallbackUrl
 * @property ?Deployment $deployment
 * @property ?array $pullRequests
 * @property ?RepositoryWebhooks $repository
 * @property ?OrganizationSimpleWebhooks $organization
 * @property ?SimpleInstallation $installation
 * @property ?SimpleUser $sender
 */
interface WebhookDeploymentProtectionRuleRequested
{
}
