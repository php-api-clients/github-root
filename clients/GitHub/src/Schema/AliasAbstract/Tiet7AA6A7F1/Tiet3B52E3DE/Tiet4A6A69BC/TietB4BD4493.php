<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet7AA6A7F1\Tiet3B52E3DE\Tiet4A6A69BC;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietB4BD4493
{
    public const SCHEMA_JSON         = '{
    "required": [
        "id",
        "name",
        "description",
        "monthly_price_in_cents",
        "yearly_price_in_cents",
        "price_model",
        "has_free_trial",
        "unit_name",
        "bullets"
    ],
    "type": "object",
    "properties": {
        "bullets": {
            "type": "array",
            "items": {
                "type": "string"
            }
        },
        "description": {
            "type": "string"
        },
        "has_free_trial": {
            "type": "boolean"
        },
        "id": {
            "type": "integer"
        },
        "monthly_price_in_cents": {
            "type": "integer"
        },
        "name": {
            "type": "string"
        },
        "price_model": {
            "enum": [
                "FREE",
                "FLAT_RATE",
                "PER_UNIT"
            ],
            "type": "string"
        },
        "unit_name": {
            "type": [
                "string",
                "null"
            ]
        },
        "yearly_price_in_cents": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "bullets": [
        "generated",
        "generated"
    ],
    "description": "generated",
    "has_free_trial": false,
    "id": 2,
    "monthly_price_in_cents": 22,
    "name": "generated",
    "price_model": "FREE",
    "unit_name": "generated",
    "yearly_price_in_cents": 21
}';

    public function __construct(public array $bullets, public string $description, #[MapFrom('has_free_trial')]
    public bool $hasFreeTrial, public int $id, #[MapFrom('monthly_price_in_cents')]
    public int $monthlyPriceInCents, public string $name, #[MapFrom('price_model')]
    public string $priceModel, #[MapFrom('unit_name')]
    public string|null $unitName, #[MapFrom('yearly_price_in_cents')]
    public int $yearlyPriceInCents,)
    {
    }
}
