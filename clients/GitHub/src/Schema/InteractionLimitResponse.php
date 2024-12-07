<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class InteractionLimitResponse implements \ApiClients\Client\GitHub\Contract\InteractionLimitResponse
{
    public const SCHEMA_JSON         = '{
    "title": "Interaction Limits",
    "required": [
        "limit",
        "origin",
        "expires_at"
    ],
    "type": "object",
    "properties": {
        "limit": {
            "enum": [
                "existing_users",
                "contributors_only",
                "collaborators_only"
            ],
            "type": "string",
            "description": "The type of GitHub user that can comment, open issues, or create pull requests while the interaction limit is in effect.",
            "examples": [
                "collaborators_only"
            ]
        },
        "origin": {
            "type": "string",
            "examples": [
                "repository"
            ]
        },
        "expires_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2018-08-17T04:18:39Z"
            ]
        }
    },
    "description": "Interaction limit settings."
}';
    public const SCHEMA_TITLE        = 'Interaction Limits';
    public const SCHEMA_DESCRIPTION  = 'Interaction limit settings.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "limit": "existing_users",
    "origin": "generated",
    "expires_at": "1970-01-01T00:00:00+00:00"
}';

    /**
     * limit: The type of GitHub user that can comment, open issues, or create pull requests while the interaction limit is in effect.
     */
    public function __construct(public string $limit, public string $origin, #[MapFrom('expires_at')]
    public string $expiresAt,)
    {
    }
}
