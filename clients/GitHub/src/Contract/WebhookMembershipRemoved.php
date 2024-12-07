<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\WebhookMembershipRemoved\Sender;
use ApiClients\Client\GitHub\Schema\WebhooksTeam;
use ApiClients\Client\GitHub\Schema\WebhooksUser;

/**
 * @property string $action
 * @property ?EnterpriseWebhooks $enterprise
 * @property ?SimpleInstallation $installation
 * @property ?WebhooksUser $member
 * @property OrganizationSimpleWebhooks $organization
 * @property ?RepositoryWebhooks $repository
 * @property string $scope
 * @property ?Sender $sender
 * @property WebhooksTeam $team
 */
interface WebhookMembershipRemoved
{
}
