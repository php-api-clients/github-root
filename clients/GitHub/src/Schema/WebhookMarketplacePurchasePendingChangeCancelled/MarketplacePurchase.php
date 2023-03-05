<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookMarketplacePurchasePendingChangeCancelled;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class MarketplacePurchase
{
    public const SCHEMA_JSON = '{"required":["next_billing_date"],"type":"object","properties":{"next_billing_date":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"next_billing_date":"generated_next_billing_date"}';
    public ?string $next_billing_date;
    public function __construct(string $next_billing_date)
    {
        $this->next_billing_date = $next_billing_date;
    }
}
