<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Gists\Create\Request\ApplicationJson;

final readonly class Files
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "description": "Names and content for the files that make up the gist",
    "additionalProperties": {
        "required": [
            "content"
        ],
        "type": "object",
        "properties": {
            "content": {
                "type": "string",
                "description": "Content of the file",
                "readOnly": false
            }
        }
    },
    "examples": [
        {
            "hello.rb": {
                "content": "puts \\"Hello, World!\\""
            }
        }
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Names and content for the files that make up the gist';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
