<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\Installation;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhooksUser;

/**
 * @property string $action
 * @property ?EnterpriseWebhooks $enterprise
 * @property Installation $installation
 * @property ?OrganizationSimpleWebhooks $organization
 * @property ?array $repositories
 * @property ?RepositoryWebhooks $repository
 * @property ?WebhooksUser $requester
 * @property SimpleUser $sender
 */
interface WebhookInstallationCreated
{
}
