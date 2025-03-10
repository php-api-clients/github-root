<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Orgs\SetMembershipForUser\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "role": {
            "enum": [
                "admin",
                "member"
            ],
            "type": "string",
            "description": "The role to give the user in the organization. Can be one of:  \\n * `admin` - The user will become an owner of the organization.  \\n * `member` - The user will become a non-owner member of the organization.",
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
     * role: The role to give the user in the organization. Can be one of:
     * `admin` - The user will become an owner of the organization.
     * `member` - The user will become a non-owner member of the organization.
     */
    public function __construct(public string|null $role)
    {
    }
}
