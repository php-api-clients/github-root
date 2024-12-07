<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TEDE9794C\T5FFD987D\T7CF57460;

abstract readonly class TD159142E implements \ApiClients\Client\GitHub\Contract\WebhooksPullRequest5\Links\Comments
{
    const SCHEMA_JSON = '{
    "title": "Link",
    "required": [
        "href"
    ],
    "type": "object",
    "properties": {
        "href": {
            "type": "string",
            "format": "uri-template"
        }
    }
}';
    public const SCHEMA_TITLE = 'Link';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "href": "generated"
}';
    public function __construct(public string $href)
    {
    }
}
