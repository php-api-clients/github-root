<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookRepositoryEdited\Changes;

final readonly class Topics implements \ApiClients\Client\GitHub\Contract\WebhookRepositoryEdited\Changes\Topics
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "from": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "type": "string"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct(public array|null $from)
    {
    }
}
