<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\Tiet7336FC18\Tiet4165C848\TietE4531FC1;

abstract readonly class Tiet1C8005E8
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
            "description": "The [reaction type](https:\\/\\/docs.github.com\\/enterprise-server@3.14\\/rest\\/reactions\\/reactions#about-reactions) to add to the team discussion."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "content": "+1"
}';

    /**
     * content: The [reaction type](https://docs.github.com/enterprise-server@3.14/rest/reactions/reactions#about-reactions) to add to the team discussion.
     */
    public function __construct(public string $content)
    {
    }
}
