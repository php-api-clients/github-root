<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhookMarketplacePurchaseChanged;

use Error;

final class PreviousMarketplacePurchase extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhookMarketplacePurchaseChanged\PreviousMarketplacePurchase $error)
    {
    }
}
