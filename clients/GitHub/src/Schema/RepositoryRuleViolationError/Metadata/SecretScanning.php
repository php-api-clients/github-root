<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\RepositoryRuleViolationError\Metadata;

final readonly class SecretScanning implements \ApiClients\Client\GitHub\Contract\RepositoryRuleViolationError\Metadata\SecretScanning
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "bypass_placeholders": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "placeholder_id": {
                        "type": "string",
                        "description": "The ID of the push protection bypass placeholder. This value is returned on any push protected routes."
                    },
                    "token_type": {
                        "type": "string"
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "bypass_placeholders": [
        {
            "placeholder_id": "generated",
            "token_type": "generated"
        },
        {
            "placeholder_id": "generated",
            "token_type": "generated"
        }
    ]
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('bypass_placeholders')] public ?array $bypassPlaceholders)
    {
    }
}
