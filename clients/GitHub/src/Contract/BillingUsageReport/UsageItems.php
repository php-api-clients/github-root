<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\BillingUsageReport;

/**
 * @property string $date
 * @property string $product
 * @property string $sku
 * @property int $quantity
 * @property string $unitType
 * @property int|float $pricePerUnit
 * @property int|float $grossAmount
 * @property int|float $discountAmount
 * @property int|float $netAmount
 * @property string $organizationName
 * @property ?string $repositoryName
 */
interface UsageItems
{
}
