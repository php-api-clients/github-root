<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\WebhooksChanges8;

use ApiClients\Client\GitHubEnterprise\Schema;

final readonly class Tier
{
    public const SCHEMA_JSON         = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
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
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": {
        "created_at": "generated",
        "description": "generated",
        "is_custom_ammount": false,
        "is_custom_amount": false,
        "is_one_time": false,
        "monthly_price_in_cents": 22,
        "monthly_price_in_dollars": 24,
        "name": "generated",
        "node_id": "generated"
    }
}';

    /**
     * from: The `tier_changed` and `pending_tier_change` will include the original tier before the change or pending change. For more information, see the pending tier change payload.
     */
    public function __construct(public Schema\WebhooksChanges8\Tier\From $from)
    {
    }
}
