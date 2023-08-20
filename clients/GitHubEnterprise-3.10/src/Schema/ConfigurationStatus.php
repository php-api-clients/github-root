<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class ConfigurationStatus
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "status": {
            "type": "string"
        },
        "progress": {
            "type": "array",
            "items": {
                "required": [
                    "status",
                    "key"
                ],
                "type": "object",
                "properties": {
                    "status": {
                        "type": "string"
                    },
                    "key": {
                        "type": "string"
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "status": "generated",
    "progress": [
        {
            "status": "generated",
            "key": "generated"
        },
        {
            "status": "generated",
            "key": "generated"
        }
    ]
}';

    public function __construct(public string|null $status, public array|null $progress)
    {
    }
}
