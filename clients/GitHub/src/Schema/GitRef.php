<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class GitRef
{
    public const SCHEMA_JSON         = '{
    "title": "Git Reference",
    "required": [
        "ref",
        "node_id",
        "url",
        "object"
    ],
    "type": "object",
    "properties": {
        "ref": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "object": {
            "required": [
                "type",
                "sha",
                "url"
            ],
            "type": "object",
            "properties": {
                "type": {
                    "type": "string"
                },
                "sha": {
                    "maxLength": 40,
                    "minLength": 40,
                    "type": "string",
                    "description": "SHA for the reference",
                    "examples": [
                        "7638417db6d59f3c431d3e1f261cc637155684cd"
                    ]
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                }
            }
        }
    },
    "description": "Git references within a repository"
}';
    public const SCHEMA_TITLE        = 'Git Reference';
    public const SCHEMA_DESCRIPTION  = 'Git references within a repository';
    public const SCHEMA_EXAMPLE_DATA = '{
    "ref": "generated",
    "node_id": "generated",
    "url": "https:\\/\\/example.com\\/",
    "object": {
        "type": "generated",
        "sha": "7638417db6d59f3c431d3e1f261cc637155684cd",
        "url": "https:\\/\\/example.com\\/"
    }
}';

    public function __construct(public string $ref, #[MapFrom('node_id')]
    public string $nodeId, public string $url, public Schema\GitRef\Object_ $object,)
    {
    }
}
