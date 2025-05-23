<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Git\CreateBlob\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "content"
    ],
    "type": "object",
    "properties": {
        "content": {
            "type": "string",
            "description": "The new blob\'s content."
        },
        "encoding": {
            "type": "string",
            "description": "The encoding used for `content`. Currently, `\\"utf-8\\"` and `\\"base64\\"` are supported.",
            "default": "utf-8"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "content": "generated",
    "encoding": "generated"
}';

    /**
     * content: The new blob's content.
     * encoding: The encoding used for `content`. Currently, `"utf-8"` and `"base64"` are supported.
     */
    public function __construct(public string $content, public string|null $encoding)
    {
    }
}
