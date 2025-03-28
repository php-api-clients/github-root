<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookProjectCardMoved\Changes;

final readonly class ColumnId
{
    public const SCHEMA_JSON         = '{
    "required": [
        "from"
    ],
    "type": "object",
    "properties": {
        "from": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "from": 4
}';

    public function __construct(public int $from)
    {
    }
}
