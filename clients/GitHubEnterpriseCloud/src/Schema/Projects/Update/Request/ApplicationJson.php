<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Projects\Update\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "Name of the project",
            "examples": [
                "Week One Sprint"
            ]
        },
        "body": {
            "type": [
                "string",
                "null"
            ],
            "description": "Body of the project",
            "examples": [
                "This project represents the sprint of the first week in January"
            ]
        },
        "state": {
            "type": "string",
            "description": "State of the project; either \'open\' or \'closed\'",
            "examples": [
                "open"
            ]
        },
        "organization_permission": {
            "enum": [
                "read",
                "write",
                "admin",
                "none"
            ],
            "type": "string",
            "description": "The baseline permission that all organization members have on this project"
        },
        "private": {
            "type": "boolean",
            "description": "Whether or not this project can be seen by everyone."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "Week One Sprint",
    "body": "This project represents the sprint of the first week in January",
    "state": "open",
    "organization_permission": "read",
    "private": false
}';

    /**
     * name: Name of the project
     * body: Body of the project
     * state: State of the project; either 'open' or 'closed'
     * organizationPermission: The baseline permission that all organization members have on this project
     * private: Whether or not this project can be seen by everyone.
     */
    public function __construct(public string|null $name, public string|null $body, public string|null $state, #[MapFrom('organization_permission')]
    public string|null $organizationPermission, public bool|null $private,)
    {
    }
}
