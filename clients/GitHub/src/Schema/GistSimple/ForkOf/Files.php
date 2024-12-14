<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\GistSimple\ForkOf;

final readonly class Files implements \ApiClients\Client\GitHub\Contract\GistSimple\ForkOf\Files
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "additionalProperties": {
        "type": "object",
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
