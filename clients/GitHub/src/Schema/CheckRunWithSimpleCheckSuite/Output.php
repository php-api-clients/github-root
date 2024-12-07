<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\CheckRunWithSimpleCheckSuite;

final readonly class Output implements \ApiClients\Client\GitHub\Contract\CheckRunWithSimpleCheckSuite\Output
{
    const SCHEMA_JSON = '{
    "required": [
        "title",
        "summary",
        "text",
        "annotations_count",
        "annotations_url"
    ],
    "type": "object",
    "properties": {
        "annotations_count": {
            "type": "integer"
        },
        "annotations_url": {
            "type": "string",
            "format": "uri"
        },
        "summary": {
            "type": [
                "string",
                "null"
            ]
        },
        "text": {
            "type": [
                "string",
                "null"
            ]
        },
        "title": {
            "type": [
                "string",
                "null"
            ]
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "annotations_count": 17,
    "annotations_url": "https:\\/\\/example.com\\/",
    "summary": "generated",
    "text": "generated",
    "title": "generated"
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('annotations_count')] public int $annotationsCount, #[\EventSauce\ObjectHydrator\MapFrom('annotations_url')] public string $annotationsUrl, public ?string $summary, public ?string $text, public ?string $title)
    {
    }
}
