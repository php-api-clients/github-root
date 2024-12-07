<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property string $action
 * @property PersonalAccessTokenRequest $personalAccessTokenRequest
 * @property ?EnterpriseWebhooks $enterprise
 * @property OrganizationSimpleWebhooks $organization
 * @property SimpleUser $sender
 * @property SimpleInstallation $installation
 */
interface WebhookPersonalAccessTokenRequestCancelled
{
}
