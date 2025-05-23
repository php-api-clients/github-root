<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\Tiet352500C4\Tiet981B8A83\Tiet84951EE1;

abstract readonly class TietF6411D4C
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
            "description": "The [reaction type](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/rest\\/reactions\\/reactions#about-reactions) to add to the team discussion."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "content": "+1"
}';

    /**
     * content: The [reaction type](https://docs.github.com/enterprise-server@3.7/rest/reactions/reactions#about-reactions) to add to the team discussion.
     */
    public function __construct(public string $content)
    {
    }
}
