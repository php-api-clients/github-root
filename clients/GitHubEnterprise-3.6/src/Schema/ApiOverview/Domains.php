<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\ApiOverview;

final readonly class Domains
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "website": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        },
        "codespaces": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        },
        "copilot": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        },
        "packages": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "website": [
        "generated",
        "generated"
    ],
    "codespaces": [
        "generated",
        "generated"
    ],
    "copilot": [
        "generated",
        "generated"
    ],
    "packages": [
        "generated",
        "generated"
    ]
}';

    public function __construct(public array|null $website, public array|null $codespaces, public array|null $copilot, public array|null $packages)
    {
    }
}
