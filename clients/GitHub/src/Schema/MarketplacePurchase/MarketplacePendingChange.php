<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\MarketplacePurchase;

use ApiClients\Client\GitHub\Schema\MarketplaceListingPlan;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class MarketplacePendingChange implements \ApiClients\Client\GitHub\Contract\MarketplacePurchase\MarketplacePendingChange
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "is_installed": {
            "type": "boolean"
        },
        "effective_date": {
            "type": "string"
        },
        "unit_count": {
            "type": [
                "integer",
                "null"
            ]
        },
        "id": {
            "type": "integer"
        },
        "plan": {
            "title": "Marketplace Listing Plan",
            "required": [
                "url",
                "accounts_url",
                "id",
                "number",
                "name",
                "description",
                "has_free_trial",
                "price_model",
                "unit_name",
                "monthly_price_in_cents",
                "state",
                "yearly_price_in_cents",
                "bullets"
            ],
            "type": "object",
            "properties": {
                "url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313"
                    ]
                },
                "accounts_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts"
                    ]
                },
                "id": {
                    "type": "integer",
                    "examples": [
                        1313
                    ]
                },
                "number": {
                    "type": "integer",
                    "examples": [
                        3
                    ]
                },
                "name": {
                    "type": "string",
                    "examples": [
                        "Pro"
                    ]
                },
                "description": {
                    "type": "string",
                    "examples": [
                        "A professional-grade CI solution"
                    ]
                },
                "monthly_price_in_cents": {
                    "type": "integer",
                    "examples": [
                        1099
                    ]
                },
                "yearly_price_in_cents": {
                    "type": "integer",
                    "examples": [
                        11870
                    ]
                },
                "price_model": {
                    "enum": [
                        "FREE",
                        "FLAT_RATE",
                        "PER_UNIT"
                    ],
                    "type": "string",
                    "examples": [
                        "FLAT_RATE"
                    ]
                },
                "has_free_trial": {
                    "type": "boolean",
                    "examples": [
                        true
                    ]
                },
                "unit_name": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "state": {
                    "type": "string",
                    "examples": [
                        "published"
                    ]
                },
                "bullets": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "examples": [
                        "Up to 25 private repositories",
                        "11 concurrent builds"
                    ]
                }
            },
            "description": "Marketplace Listing Plan"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "is_installed": false,
    "effective_date": "generated",
    "unit_count": 10,
    "id": 2,
    "plan": {
        "url": "https:\\/\\/example.com\\/",
        "accounts_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "number": 6,
        "name": "generated",
        "description": "generated",
        "monthly_price_in_cents": 22,
        "yearly_price_in_cents": 21,
        "price_model": "FREE",
        "has_free_trial": false,
        "unit_name": "generated",
        "state": "generated",
        "bullets": [
            "generated",
            "generated"
        ]
    }
}';

    /**
     * plan: Marketplace Listing Plan
     */
    public function __construct(#[MapFrom('is_installed')]
    public bool|null $isInstalled, #[MapFrom('effective_date')]
    public string|null $effectiveDate, #[MapFrom('unit_count')]
    public int|null $unitCount, public int|null $id, public MarketplaceListingPlan|null $plan,)
    {
    }
}
