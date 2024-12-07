<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\MarketplacePurchase;

use Error;

final class MarketplacePendingChange extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePendingChange $error)
    {
    }
}
