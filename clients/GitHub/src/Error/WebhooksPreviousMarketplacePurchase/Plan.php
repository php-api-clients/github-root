<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\WebhooksPreviousMarketplacePurchase;

use Error;

final class Plan extends Error
{
    public function __construct(public int $status, public \ApiClients\Client\GitHub\Schema\WebhooksPreviousMarketplacePurchase\Plan $error)
    {
    }
}
