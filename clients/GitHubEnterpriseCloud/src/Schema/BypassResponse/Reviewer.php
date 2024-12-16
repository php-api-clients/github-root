<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\BypassResponse;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Reviewer
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The user who reviewed the bypass request.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "actor_id": 8,
    "actor_name": "generated"
}';

    /**
     * actorId: The ID of the GitHub user who reviewed the bypass request.
     * actorName: The name of the GitHub user who reviewed the bypass request.
     */
    public function __construct(#[MapFrom('actor_id')]
    public int|null $actorId, #[MapFrom('actor_name')]
    public string|null $actorName,)
    {
    }
}
