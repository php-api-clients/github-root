<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser;

final readonly class Name
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "givenName": {
            "type": [
                "string",
                "null"
            ]
        },
        "familyName": {
            "type": [
                "string",
                "null"
            ]
        },
        "formatted": {
            "type": [
                "string",
                "null"
            ]
        }
    },
    "example": {
        "givenName": "Jane",
        "familyName": "User"
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "givenName": "generated",
    "familyName": "generated",
    "formatted": "generated"
}';

    public function __construct(public string|null $givenName, public string|null $familyName, public string|null $formatted)
    {
    }
}
