<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActionsSecret
{
    public const SCHEMA_JSON         = '{
    "title": "Actions Secret",
    "required": [
        "name",
        "created_at",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the secret.",
            "examples": [
                "SECRET_TOKEN"
            ]
        },
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        }
    },
    "description": "Set secrets for GitHub Actions."
}';
    public const SCHEMA_TITLE        = 'Actions Secret';
    public const SCHEMA_DESCRIPTION  = 'Set secrets for GitHub Actions.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "SECRET_TOKEN",
    "created_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00"
}';

    /**
     * name: The name of the secret.
     */
    public function __construct(public string $name, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt,)
    {
    }
}
