<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class MarketplaceListingPlan implements \ApiClients\Client\GitHub\Contract\MarketplaceListingPlan
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = 'Marketplace Listing Plan';
    public const SCHEMA_DESCRIPTION  = 'Marketplace Listing Plan';
    public const SCHEMA_EXAMPLE_DATA = '{
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
}';

    public function __construct(public string $url, #[MapFrom('accounts_url')]
    public string $accountsUrl, public int $id, public int $number, public string $name, public string $description, #[MapFrom('monthly_price_in_cents')]
    public int $monthlyPriceInCents, #[MapFrom('yearly_price_in_cents')]
    public int $yearlyPriceInCents, #[MapFrom('price_model')]
    public string $priceModel, #[MapFrom('has_free_trial')]
    public bool $hasFreeTrial, #[MapFrom('unit_name')]
    public string|null $unitName, public string $state, public array $bullets,)
    {
    }
}
