<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TB382E06B\T8099E759\TEF95167A;

abstract readonly class T295E84AF implements \ApiClients\Client\GitHub\Contract\ContentTree\Entries\Links
{
    const SCHEMA_JSON = '{
    "required": [
        "git",
        "html",
        "self"
    ],
    "type": "object",
    "properties": {
        "git": {
            "type": [
                "string",
                "null"
            ],
            "format": "uri"
        },
        "html": {
            "type": [
                "string",
                "null"
            ],
            "format": "uri"
        },
        "self": {
            "type": "string",
            "format": "uri"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "git": "https:\\/\\/example.com\\/",
    "html": "https:\\/\\/example.com\\/",
    "self": "https:\\/\\/example.com\\/"
}';
    public function __construct(public ?string $git, public ?string $html, public string $self)
    {
    }
}
