<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Copilot\AddCopilotSeatsForTeams\Request;

final readonly class ApplicationJson implements \ApiClients\Client\GitHub\Contract\Copilot\AddCopilotSeatsForTeams\Request\ApplicationJson
{
    const SCHEMA_JSON = '{
    "required": [
        "selected_teams"
    ],
    "type": "object",
    "properties": {
        "selected_teams": {
            "minItems": 1,
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "List of team names within the organization to which to grant access to GitHub Copilot."
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "selected_teams": [
        "generated"
    ]
}';
    /**
     * selectedTeams: List of team names within the organization to which to grant access to GitHub Copilot.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('selected_teams')] public array $selectedTeams)
    {
    }
}
