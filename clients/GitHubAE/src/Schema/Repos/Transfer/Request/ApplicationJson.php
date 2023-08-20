<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\Repos\Transfer\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "new_owner"
    ],
    "type": "object",
    "properties": {
        "new_owner": {
            "type": "string",
            "description": "The username or organization name the repository will be transferred to."
        },
        "team_ids": {
            "type": "array",
            "items": {
                "type": "integer"
            },
            "description": "ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "new_owner": "generated",
    "team_ids": [
        9,
        10
    ]
}';

    /**
     * newOwner: The username or organization name the repository will be transferred to.
     * teamIds: ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories.
     */
    public function __construct(#[MapFrom('new_owner')]
    public string $newOwner, #[MapFrom('team_ids')]
    public array|null $teamIds,)
    {
    }
}
