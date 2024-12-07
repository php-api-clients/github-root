<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\WebhookMarketplacePurchaseChanged;

/**
 * @property \ApiClients\Client\GitHub\Schema\WebhookMarketplacePurchaseChanged\PreviousMarketplacePurchase\Account $account
 * @property string $billingCycle
 * @property ?string $freeTrialEndsOn
 * @property ?string $nextBillingDate
 * @property ?bool $onFreeTrial
 * @property \ApiClients\Client\GitHub\Schema\WebhookMarketplacePurchaseChanged\PreviousMarketplacePurchase\Plan $plan
 * @property int $unitCount
 */
interface PreviousMarketplacePurchase
{
}
