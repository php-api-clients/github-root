<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TE8742810\T7B8AE220\TECD4D320;

abstract readonly class TD87356F6 implements \ApiClients\Client\GitHub\Contract\OrganizationFull\Plan
{
    const SCHEMA_JSON = '{
    "required": [
        "name",
        "space",
        "private_repos"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string"
        },
        "space": {
            "type": "integer"
        },
        "private_repos": {
            "type": "integer"
        },
        "filled_seats": {
            "type": "integer"
        },
        "seats": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "space": 5,
    "private_repos": 13,
    "filled_seats": 12,
    "seats": 5
}';
    public function __construct(public string $name, public int $space, #[\EventSauce\ObjectHydrator\MapFrom('private_repos')] public int $privateRepos, #[\EventSauce\ObjectHydrator\MapFrom('filled_seats')] public ?int $filledSeats, public ?int $seats)
    {
    }
}
