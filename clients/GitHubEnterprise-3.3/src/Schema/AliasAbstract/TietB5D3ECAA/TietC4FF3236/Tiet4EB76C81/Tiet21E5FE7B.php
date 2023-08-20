<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\TietB5D3ECAA\TietC4FF3236\Tiet4EB76C81;

abstract readonly class Tiet21E5FE7B
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
            "description": "The [reaction type](https:\\/\\/docs.github.com\\/enterprise-server@3.3\\/rest\\/reference\\/reactions#reaction-types) to add to the team discussion."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "content": "+1"
}';

    /**
     * content: The [reaction type](https://docs.github.com/enterprise-server@3.3/rest/reference/reactions#reaction-types) to add to the team discussion.
     */
    public function __construct(public string $content)
    {
    }
}
