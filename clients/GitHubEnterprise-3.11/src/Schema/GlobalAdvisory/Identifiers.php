<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\GlobalAdvisory;

final readonly class Identifiers
{
    public const SCHEMA_JSON         = '{
    "required": [
        "type",
        "value"
    ],
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "CVE",
                "GHSA"
            ],
            "type": "string",
            "description": "The type of identifier."
        },
        "value": {
            "type": "string",
            "description": "The identifier value."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "GHSA",
    "value": "generated"
}';

    /**
     * type: The type of identifier.
     * value: The identifier value.
     */
    public function __construct(public string $type, public string $value)
    {
    }
}
