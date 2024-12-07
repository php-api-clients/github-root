<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Codespaces\SetCodespacesAccessUsers\Request;

final readonly class ApplicationJson implements \ApiClients\Client\GitHub\Contract\Codespaces\SetCodespacesAccessUsers\Request\ApplicationJson
{
    const SCHEMA_JSON = '{
    "required": [
        "selected_usernames"
    ],
    "type": "object",
    "properties": {
        "selected_usernames": {
            "maxItems": 100,
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The usernames of the organization members whose codespaces be billed to the organization."
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "selected_usernames": [
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated",
        "generated"
    ]
}';
    /**
     * selectedUsernames: The usernames of the organization members whose codespaces be billed to the organization.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('selected_usernames')] public array $selectedUsernames)
    {
    }
}
