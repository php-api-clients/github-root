<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\GistSimple;

final readonly class Files
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "additionalProperties": {
        "type": [
            "object",
            "null"
        ],
        "properties": {
            "filename": {
                "type": "string"
            },
            "type": {
                "type": "string"
            },
            "language": {
                "type": "string"
            },
            "raw_url": {
                "type": "string"
            },
            "size": {
                "type": "integer"
            },
            "truncated": {
                "type": "boolean"
            },
            "content": {
                "type": "string"
            },
            "encoding": {
                "type": "string",
                "description": "The encoding used for `content`. Currently, `\\"utf-8\\"` and `\\"base64\\"` are supported.",
                "default": "utf-8"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
