<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class PageBuildStatus implements \ApiClients\Client\GitHub\Contract\PageBuildStatus
{
    public const SCHEMA_JSON         = '{
    "title": "Page Build Status",
    "required": [
        "url",
        "status"
    ],
    "type": "object",
    "properties": {
        "url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/pages\\/builds\\/latest"
            ]
        },
        "status": {
            "type": "string",
            "examples": [
                "queued"
            ]
        }
    },
    "description": "Page Build Status"
}';
    public const SCHEMA_TITLE        = 'Page Build Status';
    public const SCHEMA_DESCRIPTION  = 'Page Build Status';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "https:\\/\\/example.com\\/",
    "status": "generated"
}';

    public function __construct(public string $url, public string $status)
    {
    }
}
