<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TC23F2AF0\T9E530976\TA2E3984A;

use ApiClients\Client\GitHub\Contract\Teams\AddOrUpdateMembershipForUserInOrg\Request\ApplicationJson;

abstract readonly class T52070677 implements ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "role": {
            "enum": [
                "member",
                "maintainer"
            ],
            "type": "string",
            "description": "The role that this user should have in the team.",
            "default": "member"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "role": "member"
}';

    /**
     * role: The role that this user should have in the team.
     */
    public function __construct(public string|null $role)
    {
    }
}
