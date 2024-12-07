<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T6F013B0A\TBD1E3881\T6CB4A3DA;

abstract readonly class T59904AE0 implements \ApiClients\Client\GitHub\Contract\WebhooksSponsorship\Tier
{
    const SCHEMA_JSON = '{
    "title": "Sponsorship Tier",
    "required": [
        "node_id",
        "created_at",
        "description",
        "monthly_price_in_cents",
        "monthly_price_in_dollars",
        "name",
        "is_one_time"
    ],
    "type": "object",
    "properties": {
        "created_at": {
            "type": "string"
        },
        "description": {
            "type": "string"
        },
        "is_custom_ammount": {
            "type": "boolean"
        },
        "is_custom_amount": {
            "type": "boolean"
        },
        "is_one_time": {
            "type": "boolean"
        },
        "monthly_price_in_cents": {
            "type": "integer"
        },
        "monthly_price_in_dollars": {
            "type": "integer"
        },
        "name": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        }
    },
    "description": "The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload."
}';
    public const SCHEMA_TITLE = 'Sponsorship Tier';
    public const SCHEMA_DESCRIPTION = 'The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.';
    const SCHEMA_EXAMPLE_DATA = '{
    "created_at": "generated",
    "description": "generated",
    "is_custom_ammount": false,
    "is_custom_amount": false,
    "is_one_time": false,
    "monthly_price_in_cents": 22,
    "monthly_price_in_dollars": 24,
    "name": "generated",
    "node_id": "generated"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, public string $description, #[\EventSauce\ObjectHydrator\MapFrom('is_custom_ammount')] public ?bool $isCustomAmmount, #[\EventSauce\ObjectHydrator\MapFrom('is_custom_amount')] public ?bool $isCustomAmount, #[\EventSauce\ObjectHydrator\MapFrom('is_one_time')] public bool $isOneTime, #[\EventSauce\ObjectHydrator\MapFrom('monthly_price_in_cents')] public int $monthlyPriceInCents, #[\EventSauce\ObjectHydrator\MapFrom('monthly_price_in_dollars')] public int $monthlyPriceInDollars, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId)
    {
    }
}
