<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\ProtectedBranchRequiredStatusCheck;

final readonly class Checks implements \ApiClients\Client\GitHub\Contract\ProtectedBranchRequiredStatusCheck\Checks
{
    const SCHEMA_JSON = '{
    "required": [
        "context",
        "app_id"
    ],
    "type": "object",
    "properties": {
        "context": {
            "type": "string"
        },
        "app_id": {
            "type": [
                "integer",
                "null"
            ]
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "context": "generated",
    "app_id": 6
}';
    public function __construct(public string $context, #[\EventSauce\ObjectHydrator\MapFrom('app_id')] public ?int $appId)
    {
    }
}
