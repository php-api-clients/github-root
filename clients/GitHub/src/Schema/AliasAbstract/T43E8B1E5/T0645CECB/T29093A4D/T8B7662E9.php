<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T43E8B1E5\T0645CECB\T29093A4D;

abstract readonly class T8B7662E9 implements \ApiClients\Client\GitHub\Contract\WebhooksMarketplacePurchase\Account
{
    const SCHEMA_JSON = '{
    "required": [
        "type",
        "id",
        "node_id",
        "login",
        "organization_billing_email"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "login": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        },
        "organization_billing_email": {
            "type": [
                "string",
                "null"
            ]
        },
        "type": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "login": "generated",
    "node_id": "generated",
    "organization_billing_email": "generated",
    "type": "generated"
}';
    public function __construct(public int $id, public string $login, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('organization_billing_email')] public ?string $organizationBillingEmail, public string $type)
    {
    }
}
