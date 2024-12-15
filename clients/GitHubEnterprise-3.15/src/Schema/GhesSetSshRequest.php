<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class GhesSetSshRequest
{
    public const SCHEMA_JSON         = '{
    "title": "Set SSH key",
    "required": [
        "key"
    ],
    "type": "object",
    "properties": {
        "key": {
            "type": "string",
            "description": "The public SSH key to add to the `authorized_keys` file."
        }
    }
}';
    public const SCHEMA_TITLE        = 'Set SSH key';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "key": "generated"
}';

    /**
     * key: The public SSH key to add to the `authorized_keys` file.
     */
    public function __construct(public string $key)
    {
    }
}
