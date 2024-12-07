<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property ?string $action
 * @property ?string $environment
 * @property ?string $event
 * @property ?string $deploymentCallbackUrl
 * @property ?\ApiClients\Client\GitHub\Schema\Deployment $deployment
 * @property ?array $pullRequests
 * @property ?\ApiClients\Client\GitHub\Schema\RepositoryWebhooks $repository
 * @property ?\ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleInstallation $installation
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleUser $sender
 */
interface WebhookDeploymentProtectionRuleRequested
{
}
