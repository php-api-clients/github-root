<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $url
 * @property string $accountsUrl
 * @property int $id
 * @property int $number
 * @property string $name
 * @property string $description
 * @property int $monthlyPriceInCents
 * @property int $yearlyPriceInCents
 * @property string $priceModel
 * @property bool $hasFreeTrial
 * @property ?string $unitName
 * @property string $state
 * @property array $bullets
 */
interface MarketplaceListingPlan
{
}
