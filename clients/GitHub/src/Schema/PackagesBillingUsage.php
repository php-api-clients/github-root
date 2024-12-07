<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class PackagesBillingUsage implements \ApiClients\Client\GitHub\Contract\PackagesBillingUsage
{
    const SCHEMA_JSON = '{
    "required": [
        "total_gigabytes_bandwidth_used",
        "total_paid_gigabytes_bandwidth_used",
        "included_gigabytes_bandwidth"
    ],
    "type": "object",
    "properties": {
        "total_gigabytes_bandwidth_used": {
            "type": "integer",
            "description": "Sum of the free and paid storage space (GB) for GitHuub Packages."
        },
        "total_paid_gigabytes_bandwidth_used": {
            "type": "integer",
            "description": "Total paid storage space (GB) for GitHuub Packages."
        },
        "included_gigabytes_bandwidth": {
            "type": "integer",
            "description": "Free storage space (GB) for GitHub Packages."
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "total_gigabytes_bandwidth_used": 30,
    "total_paid_gigabytes_bandwidth_used": 35,
    "included_gigabytes_bandwidth": 28
}';
    /**
     * totalGigabytesBandwidthUsed: Sum of the free and paid storage space (GB) for GitHuub Packages.
     * totalPaidGigabytesBandwidthUsed: Total paid storage space (GB) for GitHuub Packages.
     * includedGigabytesBandwidth: Free storage space (GB) for GitHub Packages.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_gigabytes_bandwidth_used')] public int $totalGigabytesBandwidthUsed, #[\EventSauce\ObjectHydrator\MapFrom('total_paid_gigabytes_bandwidth_used')] public int $totalPaidGigabytesBandwidthUsed, #[\EventSauce\ObjectHydrator\MapFrom('included_gigabytes_bandwidth')] public int $includedGigabytesBandwidth)
    {
    }
}
