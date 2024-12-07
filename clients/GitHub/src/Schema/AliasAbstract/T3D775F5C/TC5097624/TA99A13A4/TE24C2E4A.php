<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T3D775F5C\TC5097624\TA99A13A4;

use ApiClients\Client\GitHub\Contract\PublicUser\Plan;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TE24C2E4A implements Plan
{
    public const SCHEMA_JSON         = '{
    "required": [
        "collaborators",
        "name",
        "space",
        "private_repos"
    ],
    "type": "object",
    "properties": {
        "collaborators": {
            "type": "integer"
        },
        "name": {
            "type": "string"
        },
        "space": {
            "type": "integer"
        },
        "private_repos": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "collaborators": 13,
    "name": "generated",
    "space": 5,
    "private_repos": 13
}';

    public function __construct(public int $collaborators, public string $name, public int $space, #[MapFrom('private_repos')]
    public int $privateRepos,)
    {
    }
}
