<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Actions\ReviewPendingDeploymentsForRun\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson implements \ApiClients\Client\GitHub\Contract\Actions\ReviewPendingDeploymentsForRun\Request\ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "environment_ids",
        "state",
        "comment"
    ],
    "type": "object",
    "properties": {
        "environment_ids": {
            "type": "array",
            "items": {
                "type": "integer",
                "examples": [
                    161171787
                ]
            },
            "description": "The list of environment ids to approve or reject",
            "examples": [
                161171787,
                161171795
            ]
        },
        "state": {
            "enum": [
                "approved",
                "rejected"
            ],
            "type": "string",
            "description": "Whether to approve or reject deployment to the specified environments.",
            "examples": [
                "approved"
            ]
        },
        "comment": {
            "type": "string",
            "description": "A comment to accompany the deployment review",
            "examples": [
                "Ship it!"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "environment_ids": [
        16,
        17
    ],
    "state": "approved",
    "comment": "generated"
}';

    /**
     * environmentIds: The list of environment ids to approve or reject
     * state: Whether to approve or reject deployment to the specified environments.
     * comment: A comment to accompany the deployment review
     */
    public function __construct(#[MapFrom('environment_ids')]
    public array $environmentIds, public string $state, public string $comment,)
    {
    }
}
