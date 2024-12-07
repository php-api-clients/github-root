<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositorySubscription implements \ApiClients\Client\GitHub\Contract\RepositorySubscription
{
    public const SCHEMA_JSON         = '{
    "title": "Repository Invitation",
    "required": [
        "created_at",
        "ignored",
        "reason",
        "subscribed",
        "url",
        "repository_url"
    ],
    "type": "object",
    "properties": {
        "subscribed": {
            "type": "boolean",
            "description": "Determines if notifications should be received from this repository.",
            "examples": [
                true
            ]
        },
        "ignored": {
            "type": "boolean",
            "description": "Determines if all notifications should be blocked from this repository."
        },
        "reason": {
            "type": [
                "string",
                "null"
            ]
        },
        "created_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2012-10-06T21:34:12Z"
            ]
        },
        "url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/example\\/subscription"
            ]
        },
        "repository_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/example"
            ]
        }
    },
    "description": "Repository invitations let you manage who you collaborate with."
}';
    public const SCHEMA_TITLE        = 'Repository Invitation';
    public const SCHEMA_DESCRIPTION  = 'Repository invitations let you manage who you collaborate with.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "subscribed": false,
    "ignored": false,
    "reason": "generated",
    "created_at": "1970-01-01T00:00:00+00:00",
    "url": "https:\\/\\/example.com\\/",
    "repository_url": "https:\\/\\/example.com\\/"
}';

    /**
     * subscribed: Determines if notifications should be received from this repository.
     * ignored: Determines if all notifications should be blocked from this repository.
     */
    public function __construct(public bool $subscribed, public bool $ignored, public string|null $reason, #[MapFrom('created_at')]
    public string $createdAt, public string $url, #[MapFrom('repository_url')]
    public string $repositoryUrl,)
    {
    }
}
