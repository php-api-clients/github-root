<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class IssueEventMilestone implements \ApiClients\Client\GitHub\Contract\IssueEventMilestone
{
    public const SCHEMA_JSON         = '{
    "title": "Issue Event Milestone",
    "required": [
        "title"
    ],
    "type": "object",
    "properties": {
        "title": {
            "type": "string"
        }
    },
    "description": "Issue Event Milestone"
}';
    public const SCHEMA_TITLE        = 'Issue Event Milestone';
    public const SCHEMA_DESCRIPTION  = 'Issue Event Milestone';
    public const SCHEMA_EXAMPLE_DATA = '{
    "title": "generated"
}';

    public function __construct(public string $title)
    {
    }
}
