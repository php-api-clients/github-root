<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\EnterpriseWebhooks;
use ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks;
use ApiClients\Client\GitHub\Schema\SimpleInstallation;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\WebhooksMarketplacePurchase;
use ApiClients\Client\GitHub\Schema\WebhooksPreviousMarketplacePurchase;

/**
 * @property string $action
 * @property string $effectiveDate
 * @property ?EnterpriseWebhooks $enterprise
 * @property ?SimpleInstallation $installation
 * @property WebhooksMarketplacePurchase $marketplacePurchase
 * @property ?OrganizationSimpleWebhooks $organization
 * @property ?WebhooksPreviousMarketplacePurchase $previousMarketplacePurchase
 * @property ?RepositoryWebhooks $repository
 * @property SimpleUser $sender
 */
interface WebhookMarketplacePurchasePurchased
{
}
