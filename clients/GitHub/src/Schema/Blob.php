<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class Blob implements \ApiClients\Client\GitHub\Contract\Blob
{
    const SCHEMA_JSON = '{
    "title": "Blob",
    "required": [
        "sha",
        "url",
        "node_id",
        "size",
        "content",
        "encoding"
    ],
    "type": "object",
    "properties": {
        "content": {
            "type": "string"
        },
        "encoding": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "sha": {
            "type": "string"
        },
        "size": {
            "type": [
                "integer",
                "null"
            ]
        },
        "node_id": {
            "type": "string"
        },
        "highlighted_content": {
            "type": "string"
        }
    },
    "description": "Blob"
}';
    public const SCHEMA_TITLE = 'Blob';
    public const SCHEMA_DESCRIPTION = 'Blob';
    const SCHEMA_EXAMPLE_DATA = '{
    "content": "generated",
    "encoding": "generated",
    "url": "https:\\/\\/example.com\\/",
    "sha": "generated",
    "size": 4,
    "node_id": "generated",
    "highlighted_content": "generated"
}';
    public function __construct(public string $content, public string $encoding, public string $url, public string $sha, public ?int $size, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('highlighted_content')] public ?string $highlightedContent)
    {
    }
}
