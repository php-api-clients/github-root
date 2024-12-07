<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\RepositoryRuleViolationError\Metadata\SecretScanning;

final readonly class BypassPlaceholders implements \ApiClients\Client\GitHub\Contract\RepositoryRuleViolationError\Metadata\SecretScanning\BypassPlaceholders
{
    const SCHEMA_JSON = '{
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
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "placeholder_id": "generated",
    "token_type": "generated"
}';
    /**
     * placeholderId: The ID of the push protection bypass placeholder. This value is returned on any push protected routes.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('placeholder_id')] public ?string $placeholderId, #[\EventSauce\ObjectHydrator\MapFrom('token_type')] public ?string $tokenType)
    {
    }
}
