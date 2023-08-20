<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Schema\EnterpriseAdmin\CreateOrg\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "login",
        "admin"
    ],
    "type": "object",
    "properties": {
        "login": {
            "type": "string",
            "description": "The organization\'s username."
        },
        "admin": {
            "type": "string",
            "description": "The login of the user who will manage this organization."
        },
        "profile_name": {
            "type": "string",
            "description": "The organization\'s display name."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "login": "generated",
    "admin": "generated",
    "profile_name": "generated"
}';

    /**
     * login: The organization's username.
     * admin: The login of the user who will manage this organization.
     * profileName: The organization's display name.
     */
    public function __construct(public string $login, public string $admin, #[MapFrom('profile_name')]
    public string|null $profileName,)
    {
    }
}
