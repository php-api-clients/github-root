<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Label
{
    public const SCHEMA_JSON         = '{
    "title": "Label",
    "required": [
        "id",
        "node_id",
        "url",
        "name",
        "description",
        "color",
        "default"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "Unique identifier for the label.",
            "format": "int64",
            "examples": [
                208045946
            ]
        },
        "node_id": {
            "type": "string",
            "examples": [
                "MDU6TGFiZWwyMDgwNDU5NDY="
            ]
        },
        "url": {
            "type": "string",
            "description": "URL for the label",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repositories\\/42\\/labels\\/bug"
            ]
        },
        "name": {
            "type": "string",
            "description": "The name of the label.",
            "examples": [
                "bug"
            ]
        },
        "description": {
            "type": [
                "string",
                "null"
            ],
            "description": "Optional description of the label, such as its purpose.",
            "examples": [
                "Something isn\'t working"
            ]
        },
        "color": {
            "type": "string",
            "description": "6-character hex code, without the leading #, identifying the color",
            "examples": [
                "FFFFFF"
            ]
        },
        "default": {
            "type": "boolean",
            "description": "Whether this label comes by default in a new repository.",
            "examples": [
                true
            ]
        }
    },
    "description": "Color-coded labels help you categorize and filter your issues (just like labels in Gmail)."
}';
    public const SCHEMA_TITLE        = 'Label';
    public const SCHEMA_DESCRIPTION  = 'Color-coded labels help you categorize and filter your issues (just like labels in Gmail).';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 208045946,
    "node_id": "MDU6TGFiZWwyMDgwNDU5NDY=",
    "url": "https:\\/\\/api.github.com\\/repositories\\/42\\/labels\\/bug",
    "name": "bug",
    "description": "Something isn\'t working",
    "color": "FFFFFF",
    "default": true
}';

    /**
     * id: Unique identifier for the label.
     * url: URL for the label
     * name: The name of the label.
     * description: Optional description of the label, such as its purpose.
     * color: 6-character hex code, without the leading #, identifying the color
     * default: Whether this label comes by default in a new repository.
     */
    public function __construct(public int $id, #[MapFrom('node_id')]
    public string $nodeId, public string $url, public string $name, public string|null $description, public string $color, public bool $default,)
    {
    }
}
