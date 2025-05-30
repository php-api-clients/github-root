<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class UserName
{
    public const SCHEMA_JSON         = '{
    "required": [
        "familyName",
        "givenName"
    ],
    "type": "object",
    "properties": {
        "formatted": {
            "type": "string",
            "description": "The full name, including all middle names, titles, and suffixes as appropriate, formatted for display.",
            "examples": [
                "Ms. Mona Lisa Octocat"
            ]
        },
        "familyName": {
            "type": "string",
            "description": "The family name of the user.",
            "examples": [
                "Octocat"
            ]
        },
        "givenName": {
            "type": "string",
            "description": "The given name of the user.",
            "examples": [
                "Mona"
            ]
        },
        "middleName": {
            "type": "string",
            "description": "The middle name(s) of the user.",
            "examples": [
                "Lisa"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "formatted": "Ms. Mona Lisa Octocat",
    "familyName": "Octocat",
    "givenName": "Mona",
    "middleName": "Lisa"
}';

    /**
     * formatted: The full name, including all middle names, titles, and suffixes as appropriate, formatted for display.
     * familyName: The family name of the user.
     * givenName: The given name of the user.
     * middleName: The middle name(s) of the user.
     */
    public function __construct(public string|null $formatted, public string $familyName, public string $givenName, public string|null $middleName)
    {
    }
}
