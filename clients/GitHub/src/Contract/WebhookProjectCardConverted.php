<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookProjectCardConverted\Changes;
use ApiClients\Client\GitHub\Schema\WebhooksProjectCard;

/**
 * @property string $action
 * @property Changes $changes
 * @property ?EnterpriseWebhooks $enterprise
 * @property ?SimpleInstallation $installation
 * @property ?OrganizationSimpleWebhooks $organization
 * @property WebhooksProjectCard $projectCard
 * @property ?RepositoryWebhooks $repository
 * @property SimpleUser $sender
 */
interface WebhookProjectCardConverted
{
}
