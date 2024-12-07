<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson;

final readonly class Ok implements \ApiClients\Client\GitHub\Contract\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok
{
    const SCHEMA_JSON = '{
    "required": [
        "total_count",
        "devcontainers"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer"
        },
        "devcontainers": {
            "type": "array",
            "items": {
                "required": [
                    "path"
                ],
                "type": "object",
                "properties": {
                    "path": {
                        "type": "string"
                    },
                    "name": {
                        "type": "string"
                    },
                    "display_name": {
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
    "total_count": 11,
    "devcontainers": [
        {
            "path": "generated",
            "name": "generated",
            "display_name": "generated"
        },
        {
            "path": "generated",
            "name": "generated",
            "display_name": "generated"
        }
    ]
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_count')] public int $totalCount, public array $devcontainers)
    {
    }
}
