<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookStatus;

final readonly class Branches implements \ApiClients\Client\GitHub\Contract\WebhookStatus\Branches
{
    const SCHEMA_JSON = '{
    "required": [
        "name",
        "commit",
        "protected"
    ],
    "type": "object",
    "properties": {
        "commit": {
            "required": [
                "sha",
                "url"
            ],
            "type": "object",
            "properties": {
                "sha": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "url": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "uri"
                }
            }
        },
        "name": {
            "type": "string"
        },
        "protected": {
            "type": "boolean"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "commit": {
        "sha": "generated",
        "url": "https:\\/\\/example.com\\/"
    },
    "name": "generated",
    "protected": false
}';
    public function __construct(public \ApiClients\Client\GitHub\Schema\WebhookStatus\Branches\Commit $commit, public string $name, public bool $protected)
    {
    }
}
