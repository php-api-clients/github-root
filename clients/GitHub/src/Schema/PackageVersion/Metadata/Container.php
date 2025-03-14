<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PackageVersion\Metadata;

final readonly class Container
{
    public const SCHEMA_JSON         = '{
    "title": "Container Metadata",
    "required": [
        "tags"
    ],
    "type": "object",
    "properties": {
        "tags": {
            "type": "array",
            "items": {
                "type": "string"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = 'Container Metadata';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "tags": [
        "generated",
        "generated"
    ]
}';

    public function __construct(public array $tags)
    {
    }
}
