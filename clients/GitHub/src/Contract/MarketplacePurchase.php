<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePendingChange;

/**
 * @property string $url
 * @property string $type
 * @property int $id
 * @property string $login
 * @property ?string $organizationBillingEmail
 * @property ?string $email
 * @property ?MarketplacePendingChange $marketplacePendingChange
 * @property \ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase $marketplacePurchase
 */
interface MarketplacePurchase
{
}
