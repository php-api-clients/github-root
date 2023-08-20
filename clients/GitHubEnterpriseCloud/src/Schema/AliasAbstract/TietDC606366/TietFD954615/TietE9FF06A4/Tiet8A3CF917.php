<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract\TietDC606366\TietFD954615\TietE9FF06A4;

abstract readonly class Tiet8A3CF917
{
    public const SCHEMA_JSON         = '{
    "required": [
        "givenName",
        "familyName"
    ],
    "type": "object",
    "properties": {
        "givenName": {
            "type": "string"
        },
        "familyName": {
            "type": "string"
        },
        "formatted": {
            "type": "string"
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

    public function __construct(public string $givenName, public string $familyName, public string|null $formatted)
    {
    }
}
