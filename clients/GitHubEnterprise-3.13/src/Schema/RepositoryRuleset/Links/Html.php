<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\RepositoryRuleset\Links;

final readonly class Html
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "href": {
            "type": "string",
            "description": "The html URL of the ruleset"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "href": "generated"
}';

    /**
     * href: The html URL of the ruleset
     */
    public function __construct(public string|null $href)
    {
    }
}
