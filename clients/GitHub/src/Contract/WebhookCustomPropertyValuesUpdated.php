<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $action
 * @property ?EnterpriseWebhooks $enterprise
 * @property ?SimpleInstallation $installation
 * @property RepositoryWebhooks $repository
 * @property OrganizationSimpleWebhooks $organization
 * @property ?SimpleUser $sender
 * @property array $newPropertyValues
 * @property array $oldPropertyValues
 */
interface WebhookCustomPropertyValuesUpdated
{
}
