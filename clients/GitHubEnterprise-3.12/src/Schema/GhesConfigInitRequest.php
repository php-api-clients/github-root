<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class GhesConfigInitRequest
{
    public const SCHEMA_JSON         = '{
    "title": "Initialize configuration with license upload",
    "required": [
        "license",
        "password"
    ],
    "type": "object",
    "properties": {
        "license": {
            "type": "string",
            "description": "The content of your _.ghl_ license file."
        },
        "password": {
            "type": "string",
            "description": "The root site administrator password."
        }
    }
}';
    public const SCHEMA_TITLE        = 'Initialize configuration with license upload';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "license": "generated",
    "password": "generated"
}';

    /**
     * license: The content of your _.ghl_ license file.
     * password: The root site administrator password.
     */
    public function __construct(public string $license, public string $password)
    {
    }
}
