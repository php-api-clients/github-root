<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhooksTeam1;
use ApiClients\Client\GitHub\Schema\WebhookTeamRemovedFromRepository\Repository;

/**
 * @property string $action
 * @property ?EnterpriseWebhooks $enterprise
 * @property ?SimpleInstallation $installation
 * @property OrganizationSimpleWebhooks $organization
 * @property ?Repository $repository
 * @property SimpleUser $sender
 * @property WebhooksTeam1 $team
 */
interface WebhookTeamRemovedFromRepository
{
}
