<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhookMarketplacePurchaseChanged\PreviousMarketplacePurchase;
use ApiClients\Client\GitHub\Schema\WebhooksMarketplacePurchase;

/**
 * @property string $action
 * @property string $effectiveDate
 * @property ?EnterpriseWebhooks $enterprise
 * @property ?SimpleInstallation $installation
 * @property WebhooksMarketplacePurchase $marketplacePurchase
 * @property ?OrganizationSimpleWebhooks $organization
 * @property ?PreviousMarketplacePurchase $previousMarketplacePurchase
 * @property ?RepositoryWebhooks $repository
 * @property SimpleUser $sender
 */
interface WebhookMarketplacePurchaseChanged
{
}
