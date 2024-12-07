<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class LabelSearchResultItem implements \ApiClients\Client\GitHub\Contract\LabelSearchResultItem
{
    const SCHEMA_JSON = '{
    "title": "Label Search Result Item",
    "required": [
        "id",
        "node_id",
        "url",
        "name",
        "color",
        "default",
        "description",
        "score"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "node_id": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "name": {
            "type": "string"
        },
        "color": {
            "type": "string"
        },
        "default": {
            "type": "boolean"
        },
        "description": {
            "type": [
                "string",
                "null"
            ]
        },
        "score": {
            "type": "number"
        },
        "text_matches": {
            "title": "Search Result Text Matches",
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "object_url": {
                        "type": "string"
                    },
                    "object_type": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "property": {
                        "type": "string"
                    },
                    "fragment": {
                        "type": "string"
                    },
                    "matches": {
                        "type": "array",
                        "items": {
                            "type": "object",
                            "properties": {
                                "text": {
                                    "type": "string"
                                },
                                "indices": {
                                    "type": "array",
                                    "items": {
                                        "type": "integer"
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    },
    "description": "Label Search Result Item"
}';
    public const SCHEMA_TITLE = 'Label Search Result Item';
    public const SCHEMA_DESCRIPTION = 'Label Search Result Item';
    const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "node_id": "generated",
    "url": "https:\\/\\/example.com\\/",
    "name": "generated",
    "color": "generated",
    "default": false,
    "description": "generated",
    "score": 5,
    "text_matches": [
        {
            "object_url": "generated",
            "object_type": "generated",
            "property": "generated",
            "fragment": "generated",
            "matches": [
                {
                    "text": "generated",
                    "indices": [
                        8,
                        9
                    ]
                },
                {
                    "text": "generated",
                    "indices": [
                        8,
                        9
                    ]
                }
            ]
        },
        {
            "object_url": "generated",
            "object_type": "generated",
            "property": "generated",
            "fragment": "generated",
            "matches": [
                {
                    "text": "generated",
                    "indices": [
                        8,
                        9
                    ]
                },
                {
                    "text": "generated",
                    "indices": [
                        8,
                        9
                    ]
                }
            ]
        }
    ]
}';
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $url, public string $name, public string $color, public bool $default, public ?string $description, public int|float $score, #[\EventSauce\ObjectHydrator\MapFrom('text_matches')] public ?array $textMatches)
    {
    }
}
