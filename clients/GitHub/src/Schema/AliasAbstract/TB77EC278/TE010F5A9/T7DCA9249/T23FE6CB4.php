<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TB77EC278\TE010F5A9\T7DCA9249;

use ApiClients\Client\GitHub\Contract\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredPullRequestReviews\BypassPullRequestAllowances;

abstract readonly class T23FE6CB4 implements BypassPullRequestAllowances
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "users": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The list of user `login`s allowed to bypass pull request requirements."
        },
        "teams": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The list of team `slug`s allowed to bypass pull request requirements."
        },
        "apps": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The list of app `slug`s allowed to bypass pull request requirements."
        }
    },
    "description": "Allow specific users, teams, or apps to bypass pull request requirements."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Allow specific users, teams, or apps to bypass pull request requirements.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "users": [
        "generated",
        "generated"
    ],
    "teams": [
        "generated",
        "generated"
    ],
    "apps": [
        "generated",
        "generated"
    ]
}';

    /**
     * users: The list of user `login`s allowed to bypass pull request requirements.
     * teams: The list of team `slug`s allowed to bypass pull request requirements.
     * apps: The list of app `slug`s allowed to bypass pull request requirements.
     */
    public function __construct(public array|null $users, public array|null $teams, public array|null $apps)
    {
    }
}
