<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Reactions\CreateForPullRequestReviewComment\Request;

final readonly class ApplicationJson
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
            "description": "The [reaction type](https:\\/\\/docs.github.com\\/enterprise-server@3.13\\/rest\\/reactions\\/reactions#about-reactions) to add to the pull request review comment."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "content": "+1"
}';

    /**
     * content: The [reaction type](https://docs.github.com/enterprise-server@3.13/rest/reactions/reactions#about-reactions) to add to the pull request review comment.
     */
    public function __construct(public string $content)
    {
    }
}
