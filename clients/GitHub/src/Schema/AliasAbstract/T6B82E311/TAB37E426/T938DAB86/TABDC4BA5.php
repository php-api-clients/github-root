<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\T6B82E311\TAB37E426\T938DAB86;

abstract readonly class TABDC4BA5 implements \ApiClients\Client\GitHub\Contract\Repos\SetUserAccessRestrictions\Request\ApplicationJson
{
    const SCHEMA_JSON = '{
    "required": [
        "users"
    ],
    "type": "object",
    "properties": {
        "users": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The username for users"
        }
    },
    "example": {
        "users": [
            "mona"
        ]
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "users": [
        "generated",
        "generated"
    ]
}';
    /**
     * users: The username for users
     */
    public function __construct(public array $users)
    {
    }
}
