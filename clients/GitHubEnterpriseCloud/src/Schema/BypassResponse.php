<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class BypassResponse
{
    public const SCHEMA_JSON         = '{
    "title": "Bypass response",
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "The ID of the response to the bypass request."
        },
        "reviewer": {
            "type": "object",
            "properties": {
                "actor_id": {
                    "type": "integer",
                    "description": "The ID of the GitHub user who reviewed the bypass request."
                },
                "actor_name": {
                    "type": "string",
                    "description": "The name of the GitHub user who reviewed the bypass request."
                }
            },
            "description": "The user who reviewed the bypass request."
        },
        "status": {
            "enum": [
                "approved",
                "denied",
                "dismissed"
            ],
            "type": "string",
            "description": "The response status to the bypass request until dismissed."
        },
        "created_at": {
            "type": "string",
            "description": "The date and time the response to the bypass request was created.",
            "format": "date-time"
        }
    },
    "description": "A response made by a delegated bypasser to a bypass request."
}';
    public const SCHEMA_TITLE        = 'Bypass response';
    public const SCHEMA_DESCRIPTION  = 'A response made by a delegated bypasser to a bypass request.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "reviewer": {
        "actor_id": 8,
        "actor_name": "generated"
    },
    "status": "dismissed",
    "created_at": "1970-01-01T00:00:00+00:00"
}';

    /**
     * id: The ID of the response to the bypass request.
     * reviewer: The user who reviewed the bypass request.
     * status: The response status to the bypass request until dismissed.
     * createdAt: The date and time the response to the bypass request was created.
     */
    public function __construct(public int|null $id, public Schema\BypassResponse\Reviewer|null $reviewer, public string|null $status, #[MapFrom('created_at')]
    public string|null $createdAt,)
    {
    }
}
