<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $action
 * @property ?\ApiClients\Client\GitHub\Schema\EnterpriseWebhooks $enterprise
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleInstallation $installation
 * @property ?\ApiClients\Client\GitHub\Schema\WebhooksUser $member
 * @property \ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property ?\ApiClients\Client\GitHub\Schema\RepositoryWebhooks $repository
 * @property string $scope
 * @property ?\ApiClients\Client\GitHub\Schema\WebhookMembershipRemoved\Sender $sender
 * @property \ApiClients\Client\GitHub\Schema\WebhooksTeam $team
 */
interface WebhookMembershipRemoved
{
}
