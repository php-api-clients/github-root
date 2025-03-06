<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\PushRuleBypassRequest;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Repository
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": [
                "integer",
                "null"
            ],
            "description": "The ID of the repository the bypass request is for."
        },
        "name": {
            "type": [
                "string",
                "null"
            ],
            "description": "The name of the repository the bypass request is for."
        },
        "full_name": {
            "type": [
                "string",
                "null"
            ],
            "description": "The full name of the repository the bypass request is for."
        }
    },
    "description": "The repository the bypass request is for."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The repository the bypass request is for.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "name": "generated",
    "full_name": "generated"
}';

    /**
     * id: The ID of the repository the bypass request is for.
     * name: The name of the repository the bypass request is for.
     * fullName: The full name of the repository the bypass request is for.
     */
    public function __construct(public int|null $id, public string|null $name, #[MapFrom('full_name')]
    public string|null $fullName,)
    {
    }
}
