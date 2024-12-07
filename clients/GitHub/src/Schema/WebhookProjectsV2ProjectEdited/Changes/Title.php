<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ProjectEdited\Changes;

final readonly class Title implements \ApiClients\Client\GitHub\Contract\WebhookProjectsV2ProjectEdited\Changes\Title
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "from": {
            "type": "string"
        },
        "to": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "from": "generated",
    "to": "generated"
}';
    public function __construct(public ?string $from, public ?string $to)
    {
    }
}
