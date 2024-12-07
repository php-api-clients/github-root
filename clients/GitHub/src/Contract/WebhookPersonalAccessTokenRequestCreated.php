<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $action
 * @property \ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest $personalAccessTokenRequest
 * @property ?\ApiClients\Client\GitHub\Schema\EnterpriseWebhooks $enterprise
 * @property \ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $sender
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleInstallation $installation
 */
interface WebhookPersonalAccessTokenRequestCreated
{
}
