<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhooksMarketplacePurchase;

use Error;

final class Account extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksMarketplacePurchase\Account $error)
    {
    }
}
