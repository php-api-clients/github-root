<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property ?string $description
 * @property ?EnterpriseWebhooks $enterprise
 * @property ?SimpleInstallation $installation
 * @property string $masterBranch
 * @property ?OrganizationSimpleWebhooks $organization
 * @property string $pusherType
 * @property string $ref
 * @property string $refType
 * @property RepositoryWebhooks $repository
 * @property SimpleUser $sender
 */
interface WebhookCreate
{
}
