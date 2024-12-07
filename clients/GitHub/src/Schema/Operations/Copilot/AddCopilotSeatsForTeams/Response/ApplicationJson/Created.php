<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotSeatsForTeams\Response\ApplicationJson;

final readonly class Created implements \ApiClients\Client\GitHub\Contract\Operations\Copilot\AddCopilotSeatsForTeams\Response\ApplicationJson\Created
{
    const SCHEMA_JSON = '{
    "required": [
        "seats_created"
    ],
    "type": "object",
    "properties": {
        "seats_created": {
            "type": "integer"
        }
    },
    "description": "The total number of seats created for members of the specified team(s)."
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The total number of seats created for members of the specified team(s).';
    const SCHEMA_EXAMPLE_DATA = '{
    "seats_created": 13
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('seats_created')] public int $seatsCreated)
    {
    }
}
