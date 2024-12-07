<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SecretScanningAlertWebhook;
use ApiClients\Client\GitHub\Schema\SecretScanningLocation;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property ?string $action
 * @property SecretScanningAlertWebhook $alert
 * @property ?SimpleInstallation $installation
 * @property SecretScanningLocation $location
 * @property ?OrganizationSimpleWebhooks $organization
 * @property RepositoryWebhooks $repository
 * @property SimpleUser $sender
 */
interface WebhookSecretScanningAlertLocationCreated
{
}
