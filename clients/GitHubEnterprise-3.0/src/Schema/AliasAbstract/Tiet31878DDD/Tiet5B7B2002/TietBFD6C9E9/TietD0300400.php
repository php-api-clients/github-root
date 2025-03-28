<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\Tiet31878DDD\Tiet5B7B2002\TietBFD6C9E9;

abstract readonly class TietD0300400
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "users": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The list of user `login`s with dismissal access"
        },
        "teams": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The list of team `slug`s with dismissal access"
        }
    },
    "description": "Specify which users and teams can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Specify which users and teams can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "users": [
        "generated",
        "generated"
    ],
    "teams": [
        "generated",
        "generated"
    ]
}';

    /**
     * users: The list of user `login`s with dismissal access
     * teams: The list of team `slug`s with dismissal access
     */
    public function __construct(public array|null $users, public array|null $teams)
    {
    }
}
