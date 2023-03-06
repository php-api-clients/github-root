<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookMarketplacePurchasePendingChangeCancelled;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class MarketplacePurchase
{
    public const SCHEMA_JSON = '{"required":["next_billing_date"],"type":"object","properties":{"next_billing_date":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"next_billing_date":"generated_next_billing_date"}';
    public function __construct(public ?string $next_billing_date)
    {
    }
}
