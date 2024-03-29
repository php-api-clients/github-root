<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseAdmin\UpdateUsernameForUser\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "login"
    ],
    "type": "object",
    "properties": {
        "login": {
            "type": "string",
            "description": "The user\'s new username."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "login": "generated"
}';

    /**
     * login: The user's new username.
     */
    public function __construct(public string $login)
    {
    }
}
