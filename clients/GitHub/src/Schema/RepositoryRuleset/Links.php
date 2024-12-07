<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\RepositoryRuleset;

final readonly class Links implements \ApiClients\Client\GitHub\Contract\RepositoryRuleset\Links
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "self": {
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "description": "The URL of the ruleset"
                }
            }
        },
        "html": {
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
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "self": {
        "href": "generated"
    },
    "html": {
        "href": "generated"
    }
}';
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Self_ $self, public ?\ApiClients\Client\GitHub\Schema\RepositoryRuleset\Links\Html $html)
    {
    }
}
