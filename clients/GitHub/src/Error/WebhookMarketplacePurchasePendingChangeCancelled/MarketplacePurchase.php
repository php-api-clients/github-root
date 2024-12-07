<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookMarketplacePurchasePendingChangeCancelled;

use Error;

final class MarketplacePurchase extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookMarketplacePurchasePendingChangeCancelled\MarketplacePurchase $error)
    {
    }
}
