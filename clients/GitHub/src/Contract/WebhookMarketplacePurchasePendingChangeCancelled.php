<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $action
 * @property string $effectiveDate
 * @property ?\ApiClients\Client\GitHub\Schema\EnterpriseWebhooks $enterprise
 * @property ?\ApiClients\Client\GitHub\Schema\SimpleInstallation $installation
 * @property \ApiClients\Client\GitHub\Schema\WebhookMarketplacePurchasePendingChangeCancelled\MarketplacePurchase $marketplacePurchase
 * @property ?\ApiClients\Client\GitHub\Schema\OrganizationSimpleWebhooks $organization
 * @property ?\ApiClients\Client\GitHub\Schema\WebhooksPreviousMarketplacePurchase $previousMarketplacePurchase
 * @property ?\ApiClients\Client\GitHub\Schema\RepositoryWebhooks $repository
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $sender
 */
interface WebhookMarketplacePurchasePendingChangeCancelled
{
}
