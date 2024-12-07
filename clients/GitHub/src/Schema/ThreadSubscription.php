<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ThreadSubscription implements \ApiClients\Client\GitHub\Contract\ThreadSubscription
{
    public const SCHEMA_JSON         = '{
    "title": "Thread Subscription",
    "required": [
        "created_at",
        "ignored",
        "reason",
        "url",
        "subscribed"
    ],
    "type": "object",
    "properties": {
        "subscribed": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "ignored": {
            "type": "boolean"
        },
        "reason": {
            "type": [
                "string",
                "null"
            ]
        },
        "created_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time",
            "examples": [
                "2012-10-06T21:34:12Z"
            ]
        },
        "url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/notifications\\/threads\\/1\\/subscription"
            ]
        },
        "thread_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/notifications\\/threads\\/1"
            ]
        },
        "repository_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/1"
            ]
        }
    },
    "description": "Thread Subscription"
}';
    public const SCHEMA_TITLE        = 'Thread Subscription';
    public const SCHEMA_DESCRIPTION  = 'Thread Subscription';
    public const SCHEMA_EXAMPLE_DATA = '{
    "subscribed": false,
    "ignored": false,
    "reason": "generated",
    "created_at": "1970-01-01T00:00:00+00:00",
    "url": "https:\\/\\/example.com\\/",
    "thread_url": "https:\\/\\/example.com\\/",
    "repository_url": "https:\\/\\/example.com\\/"
}';

    public function __construct(public bool $subscribed, public bool $ignored, public string|null $reason, #[MapFrom('created_at')]
    public string|null $createdAt, public string $url, #[MapFrom('thread_url')]
    public string|null $threadUrl, #[MapFrom('repository_url')]
    public string|null $repositoryUrl,)
    {
    }
}
