<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class UserMarketplacePurchase
{
    public const SCHEMA_JSON         = '{
    "title": "User Marketplace Purchase",
    "required": [
        "billing_cycle",
        "next_billing_date",
        "unit_count",
        "updated_at",
        "on_free_trial",
        "free_trial_ends_on",
        "account",
        "plan"
    ],
    "type": "object",
    "properties": {
        "billing_cycle": {
            "type": "string",
            "examples": [
                "monthly"
            ]
        },
        "next_billing_date": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time",
            "examples": [
                "2017-11-11T00:00:00Z"
            ]
        },
        "unit_count": {
            "type": [
                "integer",
                "null"
            ]
        },
        "on_free_trial": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "free_trial_ends_on": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time",
            "examples": [
                "2017-11-11T00:00:00Z"
            ]
        },
        "updated_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time",
            "examples": [
                "2017-11-02T01:12:12Z"
            ]
        },
        "account": {
            "title": "Marketplace Account",
            "required": [
                "url",
                "id",
                "type",
                "login"
            ],
            "type": "object",
            "properties": {
                "url": {
                    "type": "string",
                    "format": "uri"
                },
                "id": {
                    "type": "integer"
                },
                "type": {
                    "type": "string"
                },
                "node_id": {
                    "type": "string"
                },
                "login": {
                    "type": "string"
                },
                "email": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "email"
                },
                "organization_billing_email": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "email"
                }
            }
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
    },
    "description": "User Marketplace Purchase"
}';
    public const SCHEMA_TITLE        = 'User Marketplace Purchase';
    public const SCHEMA_DESCRIPTION  = 'User Marketplace Purchase';
    public const SCHEMA_EXAMPLE_DATA = '{
    "billing_cycle": "monthly",
    "next_billing_date": "2017-11-11T00:00:00Z",
    "unit_count": 10,
    "on_free_trial": true,
    "free_trial_ends_on": "2017-11-11T00:00:00Z",
    "updated_at": "2017-11-02T01:12:12Z",
    "account": {
        "url": "https:\\/\\/example.com\\/",
        "id": 2,
        "type": "generated",
        "node_id": "generated",
        "login": "generated",
        "email": "hi@example.com",
        "organization_billing_email": "hi@example.com"
    },
    "plan": {
        "url": "https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313",
        "accounts_url": "https:\\/\\/api.github.com\\/marketplace_listing\\/plans\\/1313\\/accounts",
        "id": 1313,
        "number": 3,
        "name": "Pro",
        "description": "A professional-grade CI solution",
        "monthly_price_in_cents": 1099,
        "yearly_price_in_cents": 11870,
        "price_model": "FLAT_RATE",
        "has_free_trial": true,
        "unit_name": "generated",
        "state": "published",
        "bullets": [
            "Up to 25 private repositories",
            "Up to 25 private repositories"
        ]
    }
}';

    /**
     * plan: Marketplace Listing Plan
     */
    public function __construct(#[MapFrom('billing_cycle')]
    public string $billingCycle, #[MapFrom('next_billing_date')]
    public string|null $nextBillingDate, #[MapFrom('unit_count')]
    public int|null $unitCount, #[MapFrom('on_free_trial')]
    public bool $onFreeTrial, #[MapFrom('free_trial_ends_on')]
    public string|null $freeTrialEndsOn, #[MapFrom('updated_at')]
    public string|null $updatedAt, public Schema\MarketplaceAccount $account, public Schema\MarketplaceListingPlan $plan,)
    {
    }
}
