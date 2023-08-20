<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\TietDF2A324B\TietF8F8283C\Tiet7167DC15;

abstract readonly class Tiet368824BD
{
    public const SCHEMA_JSON         = '{
    "required": [
        "content"
    ],
    "type": "object",
    "properties": {
        "content": {
            "enum": [
                "+1",
                "-1",
                "laugh",
                "confused",
                "heart",
                "hooray",
                "rocket",
                "eyes"
            ],
            "type": "string",
            "description": "The [reaction type](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/rest\\/reference\\/reactions#reaction-types) to add to the team discussion comment."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "content": "+1"
}';

    /**
     * content: The [reaction type](https://docs.github.com/enterprise-server@3.1/rest/reference/reactions#reaction-types) to add to the team discussion comment.
     */
    public function __construct(public string $content)
    {
    }
}
