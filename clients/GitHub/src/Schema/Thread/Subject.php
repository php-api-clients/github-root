<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Thread;

final readonly class Subject implements \ApiClients\Client\GitHub\Contract\Thread\Subject
{
    const SCHEMA_JSON = '{
    "required": [
        "title",
        "url",
        "latest_comment_url",
        "type"
    ],
    "type": "object",
    "properties": {
        "title": {
            "type": "string"
        },
        "url": {
            "type": "string"
        },
        "latest_comment_url": {
            "type": "string"
        },
        "type": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "title": "generated",
    "url": "generated",
    "latest_comment_url": "generated",
    "type": "generated"
}';
    public function __construct(public string $title, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('latest_comment_url')] public string $latestCommentUrl, public string $type)
    {
    }
}
