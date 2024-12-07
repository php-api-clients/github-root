<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PullRequestReviewComment\Links;

final readonly class Self_ implements \ApiClients\Client\GitHub\Contract\PullRequestReviewComment\Links\Self_
{
    public const SCHEMA_JSON         = '{
    "required": [
        "href"
    ],
    "type": "object",
    "properties": {
        "href": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls\\/comments\\/1"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "href": "https:\\/\\/example.com\\/"
}';

    public function __construct(public string $href)
    {
    }
}
