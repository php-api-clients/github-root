<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookWorkflowDispatch\Inputs;

/**
 * @property ?EnterpriseWebhooks $enterprise
 * @property ?Inputs $inputs
 * @property ?SimpleInstallation $installation
 * @property ?OrganizationSimpleWebhooks $organization
 * @property string $ref
 * @property RepositoryWebhooks $repository
 * @property SimpleUser $sender
 * @property string $workflow
 */
interface WebhookWorkflowDispatch
{
}
